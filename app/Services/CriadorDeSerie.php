<?php


namespace App\Services;


use App\Models\Serie;
use App\Models\Temporada;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie
{
    public function criarSerie(string $nomeSerie, int $qtdTemporada, int $epPorTemporada) : Serie
    {
        DB::beginTransaction();
            $serie = Serie::create(['nome' => $nomeSerie]);
            $this->criaTemporada($qtdTemporada, $epPorTemporada, $serie);
        DB::commit();
        return $serie;
    }

    private function criaTemporada(int $qtdTemporada, int $epPorTemporada, Serie $serie){
        for ($i = 1; $i <= $qtdTemporada; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criaEpisodio($epPorTemporada,$temporada);
        }
    }

    private function criaEpisodio(int $epPorTemporada, Temporada $temporada){
        for ($j = 1; $j <= $epPorTemporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}
