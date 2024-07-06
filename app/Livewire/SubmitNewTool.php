<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Smpita\ConfigAs\ConfigAs;
use Throwable;

class SubmitNewTool extends Component
{
    #[Validate('required|url|unique:operational_tools')]
    public string $toolUrl = '';

    #[Validate('required|email')]
    public string $email = '';

    public function render(): View
    {
        return view('livewire.submit-new-tool');
    }

    public function submit(): void
    {
        $this->validate();

        /** @var \App\Models\User $user */
        $user = User::query()->firstOrCreate([
            'email' => $this->email,
        ]);

        try {
            $metaTags = get_meta_tags($this->toolUrl);
        } catch (Throwable $e) {
            $metaTags = [];
        }

        $title = $metaTags['og:title'] ?? $metaTags['twitter:title'] ?? '';
        $description = $metaTags['og:description'] ?? $metaTags['twitter:description'] ?? '';
        $image = $metaTags['twitter:image'] ?? $metaTags['og:image'] ?? '';

        $tool = $user->tools()
            ->firstOrCreate([
                'url' => $this->toolUrl,
            ], [
                'name' => $title,
                'description' => $description,
                'image' => $image,
            ]);

        $checkoutUrl = $user
            ->newSubscription(
                'default',
                ConfigAs::string('cashier.stripe_yearly_price_id')
            )
            ->withCoupon(ConfigAs::string('cashier.stripe_coupon_id'))
            ->withMetadata([
                'tool_id' => $tool->id,
            ])
            ->checkout(
                [
                    'success_url' => action(ManageTool::class, ['tool' => $tool]),
                    'cancel_url' => action(Home::class),
                ]
            )
            ->asStripeCheckoutSession()
            ->url;

        $this->redirect($checkoutUrl);
    }
}
