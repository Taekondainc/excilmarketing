<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\email;
use App\Models\applicants;
use App\Models\appointment;
use App\Models\products;
use App\Models\events;
use App\Models\jobs;
use App\Models\message;
use Illuminate\Support\Facades\Mail;

class ActionController extends Controller
{
    public function Created(request $request)
    {

                //    $file=
                //$request->file('file');
                //$filename  = $file->getClientOriginalName();
                //$extension = $file->getClientOriginalExtension();
                //$picture   = date('His') . '-' . $filename;
                //$encode=base64_encode($picture);
                $image = base64_encode(file_get_contents($request->file('file')));
                $ft =   Cloudder::upload($validate['thumbnail'], null, array("timeout" => 200000,  "folder" => 'excilmarketing'));
                //  $image_url = Cloudder::show( array ("folder" => 'growgy'));
                $tg = Cloudder::getResult($ft);
                $thumbnail = $tg['secure_url'];
                $request = new products();
                //$request->file = $image;



      $request->product = request('product');
       $request->company = request('company');
        $request->description = request('description');
        $request->category = request('category');
                   $request->model = request('nbr');
                $request->productfile = $image;
                $request->save();


  }
  public function view(request $request)
  {
     $query=products::all();
     return response()->json($query, 200 );
  }
  public function delete(request $request)
  {$request=request("id");
      $sql=products::where("id",$request)->delete();
      return response()->jsonp($sql, 200 );
  }
  public function getinfo(request $request)
  {
        $request = request("id");
        $sql = products::where("id", $request)->get();
        return response()->json($sql, 200);
  }
  public function editproducts(request $request)
  {
       $checked = request("changed");
       if ($checked=="changed") {
            $image = base64_encode(file_get_contents($request->file('file')));

            //$request->file = $image;


            $id=request("id");
            $product = request('product');
            $company = request('company');
            $description = request('description');
            $category = request('category');
            $model = request('nbr');

            $requpdated = products::where("id", $id)->update(['product' => $product]);
            $requpdated1 = products::where("id", $id)->update(['company' => $company]);
            $requpdated2 = products::where("id", $id)->update(['description' => $description]);
            $requpdated3 = products::where("id", $id)->update(['category' => $category]);
            $requpdated4 = products::where("id", $id)->update(['model' => $model]);
            $requpdated5 = products::where("id", $id)->update(['productfile' => $image]);
            $sql = "Updated";
            return response()->json($sql, 200);

       } else {

            //$request->file = $image;


            $id = request("id");
            $product = request('product');
            $company = request('company');
            $description = request('description');
            $category = request('category');
            $model = request('nbr');

            $requpdated = products::where("id", $id)->update(['product' => $product]);
            $requpdated1 = products::where("id", $id)->update(['company' => $company]);
            $requpdated2 = products::where("id", $id)->update(['description' => $description]);
            $requpdated3 = products::where("id", $id)->update(['category' => $category]);
            $requpdated4 = products::where("id", $id)->update(['model' => $model]);
            $sql="Updated";
            return response()->json($sql, 200);
       }



  }public function searchproducts(request $request)
  {
        $request = request("key");
        $sql = products::where("product", 'like', "%{$request}%" )->get();
        return response()->json($sql, 200);
  }
  public function getcount(request $request)
  {

        $sql = products::count();
        return response()->json($sql, 200);
  }
    public function CreatedEvents(request $request)
    {
        $image = base64_encode(file_get_contents($request->file('file')));
        $request = new events();
        //$request->file = $image;



        $request->eventtitle = request('eventtitle');
        $request->description = request('description');
        $request->eventfile = $image;
        $request->save();
    }
    public function viewEvents(request $request)
    {
        $query = events::all();
        return response()->json($query, 200);
    }
    public function deleteEvents(request $request)
    {
        $request = request("id");
        $sql = events::where("id", $request)->delete();
        return response()->jsonp($sql, 200);
    }
    public function getEvents(request $request)
    {
        $request = request("id");
        $sql = events::where("id", $request)->get();
        return response()->json($sql, 200);
    }
    public function editEvents(request $request)
    {
        $checked = request("changed");
        if ($checked == "changed") {
            $image = base64_encode(file_get_contents($request->file('file')));

            //$request->file = $image;


           ;

            $id = request("id");
            $description = request('description');
            $event = request('eventtitle');


            $requpdated = events::where("id", $id)->update(['eventtitle' => $event]);
            $requpdated1 = events::where("id", $id)->update(['description' => $description]);
            $requpdated1 = events::where("id", $id)->update(['eventfile' => $image]);
            $sql = "Updated";
            return response()->json($sql, 200);
        } else {

            //$request->file = $image;


            $id = request("id");
            $description = request('description');
            $event = request('eventtitle');


            $requpdated = events::where("id", $id)->update(['eventtitle' => $event]);
            $requpdated1 = events::where("id", $id)->update(['description' => $description]);

            $sql = "Updated";
            return response()->json($sql, 200);
        }
    }
    public function searchEvents(request $request)
    {
        $request = request("key");
        $sql = events::where("eventtitle", 'like', "%{$request}%")->get();
        return response()->json($sql, 200);
    }


    public function message(Request $request)
    {
      $request=new message();
      $request->name=request('name'); $request->number=request('number');
      $request->email=request('email');
      $request->description=request('description');
      $request->save();
      $sql="success";
      return response()->json($sql, 200);
$name="ctriston34@gmail.com";
      $st = request("name");
      $stp = request("description");
      $data
          = array(

              'email' => $name,
              'subject' => $st,
              'message' =>  $stp,
          );
      Mail::to($name)
          ->cc('excilmarketing@excilmarketing.com')
          ->bcc('excilmarketing@excilmarketing.com')
          ->send(new email($data));

      if (Mail::failures()) {
          // return with failed message
      }


    }

    public function messages(Request $request)
    {
      $request=  message::all();
return response()->json($request, 200);
    }

public function appointment()
{$start  = request('start');

$sql = appointment::where("start",'like', "%{$start}%" )->count();

    if($sql < 1){
    $request = new appointment();
    //$request->file = $image;



$request->title = request('title');
$request->number = request('number');
$request->description = request('description');
$request->start  = request('start');
       $request->end= request('end');
       $request->editable= request('editable');
    $request->save();
    $request="Successful Creation of Appointment";
    return response()->json($request, 200);

}else{
    $request="Slot taken";
    return response()->json($request, 200);
    }

} public function appointments(Request $request)
{
  $request=  appointment::all();
return response()->json($request, 200);
}

    public function addapplicant(Request $request)
    {
        $id=request("id");
        $jobtitle=request("title");
  $image = base64_encode(file_get_contents($request->file('file')));

        //$file=$filename.$filedeta;
        $request = new applicants();
        $request->picture = $image;
         $request->fullname = request("name");
        $request->contact = request("contact");
        $request->jobid = $id;
        $request->jobtitle = $jobtitle;

        $request->save();
    }
    public function joblisting(Request $request)
{
    $image = base64_encode(file_get_contents($request->file('file')));
    $request=new jobs();
    $request->logo = $image;
        $request->company = request("company");
        $request->jobtitle = request("jttitle");
        $request->description= request("desccompany");
        $request->location = request("loccompany");
        $request->contact=request("contact");
        $request->jobtype= request("jobtype");

        $request->save();
}

    public function updjob(Request $request)
    {
        $id = request("id");
        $jobtitle = request('jttitle');
        $company = request('company');
        $description = request('desccompany');
        $category = request('category');
        $location = request('loccompany');
        $jobtype= request('jobtype');
        $contact = request('contact');

        $requpdated = jobs::where("id", $id)->update(['jobtitle' => $jobtitle]);
        $requpdated1 = jobs::where("id", $id)->update(['company' => $company]);
        $requpdated2 = jobs::where("id", $id)->update(['description' => $description]);

        $requpdated4 = jobs::where("id", $id)->update(['location' => $location]);
        $requpdated5 = jobs::where("id", $id)->update(['jobtype' => $jobtype]);
        $requpdated5 = jobs::where("id", $id)->update(['contact' => $contact]);
        $sql = "Updated";
        return response()->json($sql, 200);
    }

    public function jobget(request $request)
    {
        $id=request("id");
        $requpdated = jobs::where("id", $id)->get();

        return response()->json($requpdated,200);
    }
    public function updappl(Request $request)
    {
        $id = request("id");
        $fullname = request("name");
        $contact = request("contact");
        $request= request("jobid");
        $jobtitle =request("jobtitle");

        $requpdated = applicants::where("id", $id)->update(['jobtitle' => $jobtitle]);
        $requpdated1 = applicants::where("id", $id)->update(['fullname' => $fullname]);
        $requpdated2 = applicants::where("id", $id)->update(['jobid' => $request]);
        $requpdated5 = applicants::where("id", $id)->update(['contact' => $contact]);
        $sql = "Updated";
        return response()->json($sql, 200);
    }
    public function jobs(Request $request)
    {
        $request =jobs::all();
        return response()->json($request, 200);
    }
    public function viewappl(Request $request)
    {
        $request =applicants::all();
        return response()->json($request, 200);
    }

public function joblistingsearch(request $request)
    {
        $request = request("key");
        $sql = jobs::where("jobtitle", 'like', "%{$request}%")->get();
        return response()->json($sql, 200);
}

}
