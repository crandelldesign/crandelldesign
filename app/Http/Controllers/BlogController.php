<?php

namespace App\Http\Controllers;

use App\User;
use Canvas\Events\PostViewed;
use Canvas\Post;
use Canvas\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{

  /**
   * The user associated with a post.
   *
   * @var User
   */
  protected $user;

  /**
   * The metadata associated with a user.
   *
   * @var UserMeta
   */
  protected $userMeta;

  /**
   * Specify if related posts should be returned.
   *
   * @var bool
   */
  protected $showRelated = true;

  /**
   * The posts with a similar taxonomy.
   *
   * @var array
   */
  protected $relatedPosts = [];

  public function index()
  {

    $view = view('blog.index');
    $view->title = "Crandell Design by Matt Crandell | Web Design and Development";
    $view->description = "Web Design, web development, search engine optimization, and logo design by Matt Crandell servicing all of Metro Detroit.";

    $posts = Post::published()
              ->withUserMeta()
              ->orderByDesc('published_at')
              ->paginate(10);
    foreach ($posts as $post) {
      $main_topic = ($post->topic->isNotEmpty())?$post->topic[0]['slug']:'uncategorized';
      $post->url = '/blog/'.$main_topic.'/'.date('Y', strtotime($post->published_at)).'/'.date('m', strtotime($post->published_at)).'/'.$post->slug;
    }
    //$posts->each->append('read_time');

    $view->posts = $posts;
    $view->active_page = 'blog';
    return $view;
  }

  public function show(Request $request, string $topic, string $year, string $month, string $slug) {
    $posts = Post::published()->withUserMeta()->get();
    $post = $posts->firstWhere('slug', $slug);

    if ($this->isPublished($post)) {
      switch ($this->publicIdentifier()) {
        case 'id':
          $this->user = User::where('id', $post->user_id)->first();

          if ($this->user) {
            $this->userMeta = UserMeta::where('user_id', $this->user->id)->first();
          }
          break;

        /*case 'username':
          $this->userMeta = UserMeta::where('username', $identifier)->first();

          if ($this->userMeta) {
            $this->user = User::where('id', $this->userMeta->user_id)->first();
          }
          break;*/

        default:
          break;
      }

      $post->append('read_time');

      event(new PostViewed($post));

      $view = view('blog.post');
      $view->title = $post['title']." | Crandell Design";
      $view->description = $post['summary'];
      $view->post = $post;
      $view->user = $post->user;
      $view->username = optional($this->userMeta)->username;
      $view->avatar = !empty(optional($this->userMeta)->avatar) ? optional($this->userMeta)->avatar : $this->generateDefaultGravatar($this->user->email, 200);
      $view->meta = $post->meta;
      $view->related = $this->showRelated ? $this->getRelatedViaTaxonomy($post, $posts) : [];

      return $view;
    } else {
      abort(404);
    }
  }

  /**
   * Build a global JavaScript object for the Vue app.
   *
   * @return array
   */
  protected function scriptVariables(): array
  {
      $user = auth()->user();

      if ($user) {
          $metaData = UserMeta::where('user_id', $user->id)->first();
          $avatar = !empty(optional($metaData)->avatar) ? $metaData->avatar : $this->generateDefaultGravatar($user->email);
      }

      return [
          'avatar' => $avatar ?? null,
          'canvasPath' => config('canvas.path'),
          'path' => config('studio.path'),
          'identifier' => config('studio.identifier'),
          'timezone' => config('app.timezone'),
          'user' => $user,
      ];
  }

  /**
   * Get the identifying attribute.
   *
   * @return string
   */
  protected function publicIdentifier(): string
  {
    return config('studio.identifier');
  }

  /**
   * Generate a default Gravatar image url from a given email.
   *
   * @param string $email
   * @param int $size
   * @return string
   */
  protected function generateDefaultGravatar(string $email, int $size = 200): string
  {
    $emailHash = md5(trim(Str::lower($email)));

    return "https://secure.gravatar.com/avatar/{$emailHash}?s={$size}";
  }

  private function getRelatedViaTaxonomy($post, $posts): array {
    if ($post->tags || $post->topic) {
      $this->relatedPosts = collect($posts)->filter(function ($item, $key) use ($post) {
        $matchedTag = array_intersect(
          $item->tags->pluck('slug')->toArray(), $post->tags->pluck('slug')->toArray()
        );

        $matchedTopic = array_intersect(
          $item->topic->pluck('slug')->toArray(), $post->topic->pluck('slug')->toArray()
        );

        $item->url = '/blog/'.$item->topic[0]['slug'].'/'.date('Y', strtotime($item->published_at)).'/'.date('m', strtotime($item->published_at)).'/'.$item->slug;

        return $item->id != $post->id && ($matchedTag || $matchedTopic);
      })->toArray();
    }

    return array_values($this->relatedPosts);
  }

  private function isPublished($post): bool
  {
    return $post && $post->published;
  }
}