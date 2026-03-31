<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = new project();
        $project->name = 'GuessWho?';
        $project->description = 'Un gioco multiplayer in cui i giocatori devono indovinare l\'identità di un personaggio misterioso attraverso domande e risposte. Con categorie personalizzabili o categorie inserite dagli utenti, il gioco offre un\'esperienza divertente e coinvolgente per tutte le età.';
        $project->author = 'Ssiven';
        $project->save();

        $project = new project();
        $project->name = 'ClutchMiri E-commerce';
        $project->description = 'Sito E-commerce di clutch (borse fatte a mano), con login';
        $project->author = 'Ssiven';
        $project->save();
        
    }
}
