<?php

use Laravel\Dusk\Browser;

test('it has the correct title', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertTitle('Etketa: Guarde as suas etiquetas');
    });
});

test('it has the logo', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertVisible('@logo')
            ->assertAttribute('@logo', 'alt', 'Logo');
    });
});

test('it has the header title', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertSee('Guarde as suas etiquetas, convertemos os símbolos das instruções de uso, limpeza e conservação para texto em uma linguagem mais clara.');
    });
});
