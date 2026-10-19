<?php
declare(strict_types=1);

// Demonstration catalog only. Prices, availability, and descriptions are not live inventory.
$sampleProducts = [
    [
        'id' => 'red-sari',
        'name' => 'Crimson Silk Sari',
        'price' => 12500,
        'type' => 'dress',
        'category' => 'Sari',
        'occasion' => 'Wedding',
        'stock' => 4,
        'image' => 'https://images.unsplash.com/photo-1610030469983-98e550d6193c?auto=format&fit=crop&w=900&q=85',
        'alt' => 'Woman wearing a richly colored traditional sari',
        'description' => 'A graceful silk sari in a deep crimson shade, finished with a finely detailed woven border. A timeless choice for celebrations and special gatherings.',
        'culture' => 'The sari is worn in many forms across South Asia. Its drape, colors, and textile traditions vary between communities and occasions.',
        'featured' => true,
    ],
    [
        'blue-kurta',
        'Midnight Blue Kurta Set',
        8900,
        'dress',
        'Kurta set',
        'Festival',
        7,
        'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=900&q=85',
        'A tailored blue traditional outfit on display',
        'A comfortable kurta set in a rich midnight blue, designed with subtle embroidery for an understated festive look.',
        'Kurta styles are worn throughout South Asia, with regional details and textiles that reflect local craft traditions.',
        true,
    ],
    [
        'mustard-lehenga',
        'Mustard Festive Lehenga',
        15800,
        'dress',
        'Lehenga',
        'Celebration',
        2,
        'https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=900&q=85',
        'Detailed festive clothing in warm golden tones',
        'A joyful, full-skirted lehenga with delicate decorative detailing and a warm mustard palette.',
        'Lehengas are often chosen for weddings and festivities. Embroidery and color choices vary by region and family tradition.',
        true,
    ],
    [
        'green-dhakai',
        'Emerald Dhaka Topi & Daura Set',
        7200,
        'dress',
        'Daura set',
        'Cultural gathering',
        0,
        'https://images.unsplash.com/photo-1603217192097-13c306522271?auto=format&fit=crop&w=900&q=85',
        'Traditional formalwear with a deep green textile',
        'A demonstration look inspired by Nepal’s distinctive layered formalwear, styled in a deep emerald tone.',
        'The daura-suruwal is a traditional Nepali outfit. This sample listing is illustrative and is not a representation of a specific community garment.',
        false,
    ],
    [
        'gold-necklace',
        'Temple Motif Necklace',
        6400,
        'jewelry',
        'Necklace',
        'Wedding',
        5,
        'https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=900&q=85',
        'Gold-tone statement necklace with ornate details',
        'A statement necklace with a decorative temple-inspired motif and warm gold-tone finish.',
        'Ornament styles and their meanings differ across Nepal’s many communities. This is a contemporary demonstration design.',
        true,
    ],
    [
        'pearl-earrings',
        'Pearl Drop Earrings',
        2800,
        'jewelry',
        'Earrings',
        'Celebration',
        12,
        'https://images.unsplash.com/photo-1535632066927-ab7c9ab60908?auto=format&fit=crop&w=900&q=85',
        'Elegant drop earrings with pearl details',
        'Light-catching drop earrings with a pearl detail, an easy pairing for both festive and modern outfits.',
        'Pearls and drop silhouettes appear in many styles of jewelry; this sample is selected for its versatile styling.',
        true,
    ],
    [
        'red-bangles',
        'Red & Gold Glass Bangles',
        1600,
        'jewelry',
        'Bangles',
        'Festival',
        18,
        'https://images.unsplash.com/photo-1611652022419-a9419f74343d?auto=format&fit=crop&w=900&q=85',
        'Bright red and gold traditional bangles',
        'A vibrant set of red and gold-tone bangles to add a festive accent to a traditional outfit.',
        'Bangles are worn in many South Asian traditions, with their colors and significance varying from place to place.',
        false,
    ],
    [
        'silver-hairpin',
        'Silver Floral Hairpin',
        2200,
        'jewelry',
        'Hair accessory',
        'Cultural gathering',
        0,
        'https://images.unsplash.com/photo-1617038220319-276d3cfab638?auto=format&fit=crop&w=900&q=85',
        'Silver floral jewelry detail',
        'A delicate floral hair accessory in a silver-tone finish, designed as a subtle finishing touch.',
        'Floral motifs are common across jewelry traditions, though patterns and symbolism are specific to their makers and communities.',
        false,
    ],
];

foreach ($sampleProducts as &$product) {
    if (isset($product[0])) {
        $product = array_combine(
            ['id', 'name', 'price', 'type', 'category', 'occasion', 'stock', 'image', 'alt', 'description', 'culture', 'featured'],
            $product
        );
    }
}
unset($product);

function formatNpr(int $price): string
{
    return 'NPR ' . number_format($price);
}

function findSampleProduct(array $products, string $id): ?array
{
    foreach ($products as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }

    return null;
}
