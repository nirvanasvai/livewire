<aside>
    <div class="sidearea">
        <label for="pricerange">Высокая цена:
            <span> ₸ {{ $pricerange ?? 7000 }}</span>
        </label>
        <input wire:model.debounce.500ms="pricerange" id="pricerange" type="range" min="{{ $min }}" max="{{ $max }}"
            step="500" value="{{$pricerange}}" class="slider">
            <span class="min">₸ {{ $min }}</span>
            <span class="max">₸ {{ $max }}</span>
        </div>
    <div class="sidearea">
        <h4>Показывать только товары со скидкой!</h4>
        <div class="can-toggle demo-rebrand-2">
            <input wire:model="sale" wire:click.prefetch="toggleSale" id="e" type="checkbox">
            <label for="e">
                <div data-checked="Да" data-unchecked="Нет" class="can-toggle__switch"></div>
            </label>
        </div>
    </div>
    <div class="sidearea callout">
        <h4>Специальная распродажа!</h4>
        <p>Купите сейчас, потому что половина имеет скидку!</p>
    </div>
    <div class="sidearea callout">
        <h4>
            Связаться с нами</h4>
        <p>Вопросы?Позвони мне епт!</p>
    </div>
</aside>
