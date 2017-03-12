<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'admin' => [
        'warehouse' => 'Magasin',
    ],

    'checkout' => [
        'pay' => 'Payer avec PayPal',
        'delayed_shipping' => 'Nous sommes surchargés de commandes. Si vous commandez, merci de patienter **une à deux semaines** le temps que nous traitons toutes ces commandes.',
    ],

    'order' => [
        'item' => [
            'quantity' => 'Quantité',
        ],
    ],

    'product' => [
        'name' => 'Nom',

        'stock' => [
            'out' => 'Aucun en stock présentement :(. Revérifiez plus tard.',
            'out_with_alternative' => 'Aucun de ce type en stock présentement :(. Essayez un autre type ou revérifiez plus tard.',
        ],

        'add_to_cart' => 'Ajouter au panier',
        'notify' => "Notifiez-moi quand il sera disponible !",

        'notification_success' => 'vous serez notifié lorsque nous en aurons en stock. cliquez :link pour annuler',
        'notification_remove_text' => 'ici',

        'notification_in_stock' => 'Ce produit est déjà en stock!',
    ],
];
