<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Google\Cloud\Vison\V1\ImageAnnotatorClient;
use App\Model\Image;
use Spatie\Image\Manipulations;
use Spatie\Image\Image;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    private $announcement_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct( $announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);

        if (!$i) {
            return;
        }

        $srcPath =storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $responde->getfaceAnnotations();

        foreach ($faces as $face) {
           $vertices = $face-getBoundingPoly()->getVertices();

           $bounds=[];
           foreach ($vertices as $vertex) {
                $bounds[] = [$vertex->getX(), $vertex->getY()];
           }

           $w = $bounds[2][0] - $bounds[0][0];
           $h = $bounds[2][1] - $bounds[0][1];

           $image = SpatieImage::load($scrPath);

           $image->watermark(base_path('rotta'))
                ->watermarkPosition('top-left')
                ->watermarkPadding($bounds[0][0], $bounds[0][1])
                ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
                ->watermarkHeight($H, Manipulations::UNIT_PIXELS)
                ->watermarkFit($w, Manipulations::FIT_STRETCH);
                
            $image->save($srcPath);    
        }

        $imageAnnotator->close();
    }
}
