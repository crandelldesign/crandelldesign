<?php

namespace crandelldesign;

class Asset extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'assets';

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
