<?php

/*
 * This file is part of Laravel Love.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Cog\Laravel\Love\Reaction\Observers;

use Cog\Laravel\Love\Reaction\Events\ReactionHasBeenAdded;
use Cog\Laravel\Love\Reaction\Events\ReactionHasBeenRemoved;
use Cog\Laravel\Love\Reaction\Models\Reaction;

final class ReactionObserver
{
    public function creating(
        Reaction $reaction
    ): void {
        if (is_null($reaction->getAttributeValue('rate'))) {
            $reaction->setAttribute('rate', Reaction::RATE_DEFAULT);
        }
    }

    public function created(
        Reaction $reaction
    ): void {
        event(new ReactionHasBeenAdded($reaction));
    }

    public function deleted(
        Reaction $reaction
    ): void {
        event(new ReactionHasBeenRemoved($reaction));
    }
}
