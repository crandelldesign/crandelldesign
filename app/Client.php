<?php

namespace crandelldesign;

class Client extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'clients';

    /**
     * A client has many assets
     *
     * @return Asset
     */

    public function assets()
    {
    	return $this->hasMany('crandelldesign\Asset')->orderBy('display_order');
    }

    /**
     * A client has many testimonials
     *
     * @return Testimonial
     */
	public function testimonials()
    {
        return $this->hasMany('crandelldesign\Testimonial');
    }
}
