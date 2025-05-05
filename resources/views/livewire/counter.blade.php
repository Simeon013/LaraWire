<div>
    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>

    <flux:radio.group wire:model="payment" label="Select your payment method">
        <flux:radio value="cc" label="Credit Card" checked />
        <flux:radio value="paypal" label="Paypal" />
        <flux:radio value="ach" label="Bank transfer" />
    </flux:radio.group>
</div>
