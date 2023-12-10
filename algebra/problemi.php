
<body>

<?php 
$books= [
    ['autor' => 'najbolji autor',
    'knjiga' => 'jos bolja knjiga',
    'godina' => 2012,
    'url' =>'https://tportal.hr'],];

$filmovi= [
    ['ime' => 'batman',
    'reziser' => 'joker',
    'godina' => 2001],
    ['ime' => 'joker',
    'reziser' => 'batman',
    'godina' => 1998],
    ['ime' => 'pingvin',
    'reziser' => 'zagonetka',
    'godina' => 2001]];
    
function filterByYear($filmovi) {
        $filteredMovie = [];

    foreach ($filmovi as $film) {
        if ($film['godina'] >= 2001) $filteredMovie[] = $film;
    
    };
    return $filteredMovie;
}
    $daj=filterByYear($filmovi, 2001);

?>

<ul>
    <?php foreach($books as $book) : ?>
        <?php if ($book['autor'] === 'najbolji autor') : ?>
            <li><a href="<?= $book['url'] ?>">
            <?= $book['knjiga']; ?> <?= $book['godina'] ?>
        </a></li>
        <?php endif; ?>
            <?php endforeach; ?>
</ul>

<p>
    <?php foreach($daj as $film) :?>
        <?= $film['ime']; ?>
        <?= $film['godna']; ?>
    <?php endforeach; ?>
</p>
</body>