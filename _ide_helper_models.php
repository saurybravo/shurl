<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Url
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $token
 * @property string $reference_url
 * @property int $visits
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $shortened_url
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Url onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereReferenceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereVisits($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Url withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Url withoutTrashed()
 * @property string $referrer_url
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Url whereReferrerUrl($value)
 */
	class Url extends \Eloquent {}
}

