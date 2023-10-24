<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Repositories\CarRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CarController extends Controller
{
    public CarRepository $carRepository;
    public function __construct(CarRepository $carRepository) {
        $this->carRepository = $carRepository;
    }
    public function index() {
        return view("pages.car_create");
    }
    public function store(CarRequest $request) {
        $imagePath = request('image')->store('uploads', 'public');

        //intervention magic happens here, we are resizing the image before saving to db
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        $this->carRepository->create([
            'title' => $request['title'],
            'image' => $imagePath,
            'comment' => $request['comment'],
        ]);


        return redirect('/')->with('success', 'Your image has been successfully Uploaded');;
    }
}
