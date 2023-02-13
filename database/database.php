<?php

    include __DIR__.'/../sorting_folder/Product.php';
    include __DIR__.'/../sorting_folder/Accessory.php';
    include __DIR__.'/../sorting_folder/Category.php';
    include __DIR__.'/../sorting_folder/Food.php';
    include __DIR__.'/../sorting_folder/Toy.php';

    $categories =

    [
        'Cane' => new Category ('Cane', '<i class="fa-solid fa-dog"></i>'),
        'Gatto' => new Category ('Gatto', '<i class="fa-solid fa-cat"></i>'),
        'Uccello' => new Category ('Uccello', '<i class="fa-solid fa-dove"></i>'),
        'Pesce' => new Category ('Pesce', '<i class="fa-solid fa-fish-fins"></i>')
    ];

    $products =

    [
        new Food($categories['Cane'], 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg?v=1762632789', 'prosciutto, riso', 'Royal Canin Mini Adult',  43.99, '545g'),
        new Food($categories['Cane'], 'https://www.bauzaar.it/media/catalog/product/t/o/tonno_e_riso_cane.jpg?store=default&image-type=image', 'manzo, cereali', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, '600g'),
        new Food($categories['Gatto'], 'https://www.cicalia.com/it/img/imgproducts/64103/l_64103.jpg', 'tonno, pollo, prosciutto', 'Almo Nature Cat Daily Lattina', 34.99, '400g'),
        new Food($categories['Pesce'], 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg?v=1762477819', 'Pesci e sottoprodotti dei pesci, cereali, lieviti, alghe', 'Mangime per Pesci Guppy in Fiocchi', 2.95, '30g'),

        new Accessory($categories['Uccello'], 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610', 'Legno', 'Voliera Wilma in Legno', 184.99, 'M= L83 x P67 x H135 cm'),
        new Accessory($categories['Pesce'], 'https://www.koi-franciacorta.it/pimages/TETRA-EASYCRYSTAL-FILTERPACK-CON-CARBONE-CONFEZIONE-DA-3-PEZZI-E-extra-big-5544-824.jpg', 'Materiale espanso', 'Cartucce Filtranti per Filtro EasyCristal', 2.29, 'ND'),

        new Toy($categories['Cane'], 'Galleggia e rimbalza','https://www.petparadise.it/img_prodotti/3178.jpg', 'Kong Classic', 13.49, '8,5 cm x 10 cm'),
        new Toy($categories['Gatto'], 'Morbido con codina in corda','https://www.zampashop.com/9326-large_default/topo-gioco-per-gatti-con.jpg', 'Topini di peluche Trixie', 4.99, '8,5 cm x 10 cm')
    ];
?>