<?php
namespace App\Http\Controllers;


use Artesaos\SEOTools\Traits\SEOTools;

class HomeController extends Controller
{
    use SEOTools;

    public function index()
    {

        $bestMen = [[
            "name" => "Caio",
            "picture" => 100012563108301
        ], [
            "name" => "Daniel",
            "picture" => 100011568640579
        ], [
            "name" => "Delano",
            "picture" => 100001650966227
        ], [
            "name" => "Felipe",
            "picture" => 100001247005725
        ], [
            "name" => "Gabriel",
            "picture" => 100001626924230
        ], [
            "name" => "Israel",
            "picture" => 100009681122628
        ], [
            "name" => "Jezreel",
            "picture" => 100003704398397
        ], [
            "name" => "Jhonatan",
            "picture" => 100002223782428
        ], [
            "name" => "Kayo",
            "picture" => 100001923007295
        ], [
            "name" => "Magnun",
            "picture" => 100002108997624
        ], [
            "name" => "Marcelo",
            "picture" => 100002935525804
        ]];

        $bridesMaid = [[
            "name" => "Amanda",
            "picture" => 100001809299217
        ], [
            "name" => "Anna",
            "picture" => 100002635522772
        ], [
            "name" => "Claudia",
            "picture" => 100001537551277
        ], [
            "name" => "Gabriela",
            "picture" => 100002079846433
        ], [
            "name" => "Jessica",
            "picture" => 100002892781368
        ], [
            "name" => "Rafaela",
            "picture" => 100001274361808,
        ], [
            "name" => "Vitória",
            "picture" => 100004914693030
        ]];

        $backgroundPictures = $this->buildBackgroundPictures();

//        $galleryPictures = $this->buildGalleryPictures();
//        $galleryPicturesAssets = [];
//        foreach (array_rand($galleryPictures, 6) as $index) {
//            $galleryPicturesAssets[] = asset("pictures/" . $galleryPictures[$index]['basename']);
//        }

        $env = [
            'picture' => asset("pictures/" . $backgroundPictures[array_rand($backgroundPictures)]['basename']),
            'footerPicture' => asset("pictures/" . $backgroundPictures[array_rand($backgroundPictures)]['basename']),
            'bestMen' => $bestMen,
            'bridesMaid' => $bridesMaid
        ];
        return view('home', $env);
    }

    public function redirectToPontofrio(\Request $request)
    {
        return redirect('http://www.pontofrio.com.br/Site/ListaGerenciadaLandingPage.aspx?idListaCompra=592592&ordenacao=1&paginaAtual=1&numPorPagina=150');
    }

    public function rsvp(\Request $request)
    {

    }

    private function pictures_path($file)
    {
        return public_path("pictures" . DIRECTORY_SEPARATOR . $file['basename']);
    }

    private function buildBackgroundPictures()
    {
        $files = \Flysystem::listContents('/background');
        $files = array_where($files, function ($array) {
            return ($array['type'] == 'file' && str_contains($array['mimetype'], 'image/'));
        });

        foreach ($files as $file) {
            if (!file_exists($this->pictures_path($file))) {
                file_put_contents($this->pictures_path($file), \Flysystem::read($file['path']));
            }
        }
        return $files;
    }

    private function buildGalleryPictures()
    {
        $files = \Flysystem::listContents('/gallery');
        $files = array_where($files, function ($array) {
            return ($array['type'] == 'file' && str_contains($array['mimetype'], 'image/'));
        });

        foreach ($files as $file) {
            if (!file_exists($this->pictures_path($file))) {
                file_put_contents($this->pictures_path($file), \Flysystem::read($file['path']));
            }
        }
        return $files;
    }
}