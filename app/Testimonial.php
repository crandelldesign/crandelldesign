<?php

namespace crandelldesign;

class Testimonial extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'testimonials';

	/**
     * An asset has a parent client
     *
     * @return Client
     */
	public function clients()
    {
        return $this->belongsTo('crandelldesign\Client');
    }
}
