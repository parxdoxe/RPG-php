<?php

require 'Character.php';

$name = $_POST['name'] ?? null;
$class = $_POST['classe'] ?? null;
$tribu = $_POST['tribu'] ?? null;


$character = new Character($name, $class, $tribu);

$life = $character->life;
$mana = $character->mana;
$strength = $character->strength;

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="container mx-auto h-screen flex items-center justify-center">
   
<div class="w-full flex items-center justify-center items-center flex-col">

   <?php if (!empty($_POST)) { ?>

        <div class="bg-white w-1/2 shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col justify-center items-center">
            <h1 class="font-bold text-2xl"><?= $name  ?></h1>
            <?php if ($class === 'guerrier') { ?>
                <img class="w-[150px]" src="./img/guerrier.jpg" alt="">
           <?php } else if ($class === 'mage') { ?>
                <img class="w-[150px]" src="./img/mage.jpg" alt="">
           <?php } else if ($class === 'chasseur') { ?>
                <img class="w-[150px]" src="./img/chasseur.jpg" alt="">
           <?php } ?>
           <p class="font-bold">Tu es un <?= $class  ?> <?= $tribu  ?></p>
           <ul class="list-disc">
            <li>Tu as <?= $life ?> de vie.</li>
            <li>Tu as <?= $strength ?> de force.</li>
            <li>Tu as <?= $mana ?> de mana.</li>
           </ul>
        </div>
        
        <a class="text-blue-500" href="index.php">Je veux un autre personnage</a>
        
   <?php } ?>
   

        
    
    
  <form class="bg-white w-1/2 shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">

  <?php if (empty($_POST)) { ?>
                    
          
                
    

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Votre nom :
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Votre nom">
    </div>

    <div class="mb-3">
      <input type="checkbox" name="random" id="random">
      <label class="mx-1 text-sm text-gray-500" for="random">Générer un nom aléatoire</label>
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Votre tribu :
      </label>
      <select name="tribu" id="tribu" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option  value="humain">Humain</option>
        <option  value="nain">Nain</option>
        <option  value="elfe">Elfe</option>
      </select>
    </div>

    <div class="mb-4 w-full">
        <label for="classe">Votre classe :</label>

        <div class="mb-1 flex justify-center">
            <div class="flex flex-col mr-7">
                <div class="flex">
                    <input type="radio" name="classe" id="guerrier" value="guerrier">
                    <label for="guerrier">Guerrier</label>
                </div>
                <div class="mb-1">
                    <img src="./img/guerrier.jpg" alt="">
                </div>
            </div>

            <div class="flex flex-col mr-7">
                <div class="flex">
                    <input type="radio" name="classe" id="mage" value="mage">
                    <label for="mage">Mage</label>
                </div>
                <div class="mb-1">
                    <img src="./img/mage.jpg" alt="">
                </div>
            </div>

            <div class="flex flex-col mr-7">
                <div class="flex">
                    <input type="radio" name="classe" id="chasseur" value="chasseur">
                    <label for="chasseur">Chasseur</label>
                </div>
                <div class="mb-1">
                    <img src="./img/chasseur.jpg" alt="">
                </div>
            </div>
        </div>
        
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Créer
      </button>
    </div>

  </form>
  <?php } ?>
</div>

</body>
</html>