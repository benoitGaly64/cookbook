<?php

use App\Recipies;
use Illuminate\Database\Seeder;


class RecipiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipie1 = Recipies::create([
            'title' => 'Levure de boulanger',
            'description' => 'La levure de boulanger peut etre utilisée pour faire du pain',
            'ingredients' => '<ul>
            <li>1 grande cuillère de sel</li>
            <li>1 grande cuillère de sucre</li>
            <li>4 tasses d\'eau</li>
            <li>Une pomme de terre de taille standard pelée</li>
            <li>De la levure sèche (facultatif mais recommandé)</li>
            </ul>',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '10',
            'preptime' => '15 min',
            'baking' => '-',
            'waittime' => '2 jours',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '1',

        ]);

        $recipie2 = Recipies::create([
            'title' => 'Recette 2',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '1',

        ]);
        $recipie3 = Recipies::create([
            'title' => 'Recette 3',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '1',

        ]);
        $recipie4 = Recipies::create([
            'title' => 'Recette 4',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '1',

        ]);
        $recipie5 = Recipies::create([
            'title' => 'Recette 5',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '2',

        ]);
        $recipie6 = Recipies::create([
            'title' => 'Recette 6',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '2',

        ]);
        $recipie7 = Recipies::create([
            'title' => 'Recette 7',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '2',

        ]);
        $recipie8 = Recipies::create([
            'title' => 'Recette 8',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '2',

        ]);
        $recipie9 = Recipies::create([
            'title' => 'Recette 9',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '2',

        ]);
        $recipie10 = Recipies::create([
            'title' => 'Recette 10',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '1',

        ]);
        $recipie11 = Recipies::create([
            'title' => 'Recette 11',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '2',

        ]);
        $recipie12 = Recipies::create([
            'title' => 'Recette 12',
            'description' => 'la  recette 2 est trop bonne',
            'ingredients' => '1 petite cuillère de sel
            1 petite cuillère de sucre
            4 bols deau
            Une cerise de taille standard pelée',
            'method' => 'Commencez simplement par faire bouillir leau pour y cuire la pomme de terre. Celle-ci doit être suffisamment cuite et tendre à coeur. comment faire levure boulanger maisoncomment faire levure boulanger maison

            À la fin de la cuisson, mettez de côté l’eau de cuisson.
            
            Prenez ensuite la pomme de terre puis écrasez-là avec une fourchette.
            
            comment faire levure boulanger maison
            
            Ajoutez-y le sucre et le sel que vous aurez préalablement pesé (et la levure sèche si vous en avez).
            
            Laisser là devenir tiède puis ajouter là à votre eau de cuisson.
            
            Le but va être maintenant de laisser fermenter le tout. Pour cela, mettez le tout dans un bocal en verre et couvrez avec un linge (mais nutilisez pas le couvercle du bocal, il faut que ça respire).
            
            Laissez reposer dans un endroit assez chaud pour le bon développement (au dessus de 20°c).
            
            Cela va prendre quelques jours à fermenter (1 à 2 jours, parfois un peu plus). Si ce nest pas le cas, il faudra retenter votre chance.
            
            Pour optimiser vos chances, lidéal est encore d’ajouter un peu de levure sèche si vous en avez sous la main. Cela va permettre dactiver la fermentation et vous faciliter amplement la tâche.
            
            comment faire levure boulanger maison',
            'quantity' => '4',
            'preptime' => '50 min',
            'baking' => '25',
            'waittime' => '-',
            'price' => 'économique',
            'dificulty' => 'facile',
            'user_id' => '1',

        ]);
    }
}
