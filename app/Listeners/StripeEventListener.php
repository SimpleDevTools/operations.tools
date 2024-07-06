<?php

namespace App\Listeners;

use App\Models\OperationalTool;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Laravel\Cashier\Events\WebhookReceived;
use Smpita\TypeAs\TypeAs;

class StripeEventListener implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WebhookReceived $event): void
    {
        if ($event->payload['type'] === 'customer.subscription.created') {
            $subscriptionId = $event->payload['data']['object']['id'];
            $toolId = $event->payload['data']['object']['metadata']['tool_id'] ?? null;
            throw_if(empty($toolId), 'Tool ID not found for subscription ['.$subscriptionId.']');
            $tool = TypeAs::class(OperationalTool::class, OperationalTool::findOrFail($toolId));
            $tool->stripe_subscription_id = $subscriptionId;
            $tool->save();
        }
    }
}
