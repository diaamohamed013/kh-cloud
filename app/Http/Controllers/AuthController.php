<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function SignUp(Request $request)
    {
        //
        // $Lang = session()->get('Lang');
        // $IDPeriodPackage = $request->IDPeriodPackage;
        // $currencySelect = $request->currencySelect;
        // $UserStrangeKids = $request->UserStrangeKids;
        // $UserEgyptionKids = $request->UserEgyptionKids;
        // $board = $request->board;

        // if ($Lang == 'ar') {
        //     $Countries = Country::all()->sortBy('country_name_ar');
        // } elseif ($Lang == 'en') {
        //     $Countries = Country::all()->sortBy('country_name_en');
        // }

        // $BusinessTypes = BusinessType::where('BusinessTypeActive', 1)->get();
        // return view('website.auth.signup', compact('Countries', 'BusinessTypes', 'IDPeriodPackage', 'currencySelect', 'UserStrangeKids', 'UserEgyptionKids', 'board'));
        return view('site.auth.signup');
    }

    public function SignUpSubmit(Request $request)
    {
        App::setLocale(session()->get('Lang'));


        $User = User::where('UserEmail', $request->UserEmail)->where('UserActive', 1)->first();

        if ($User) {
            return redirect()->back()->withErrors(trans('validation.EmailExist'));
        }
        $User = User::where('PhoneNumber', $request->UserPhone)->where('UserActive', 1)->first();

        if ($User) {
            return redirect()->back()->withErrors(trans('validation.PhoneNumberExist'));
        } else {

            $User = new User;
        }
        $User->FirstName = $request->FirstName;
        $User->MiddleName = $request->MiddleName;
        $User->LastName = $request->LastName;
        $User->UserEmail = $request->UserEmail;
        $User->UserPassword = Hash::make($request->UserPassword);
        $User->PhoneNumber = $request->UserPhone;
        $User->IDCountry = $request->IDCountry;
        $User->IDCity = $request->IDCity;
        $User->AddressDetail = $request->AddressDetail;
        $User->UserGender = $request->UserGender;
        $User->board = $request->board;
        $User->save();

        // $UserCompany = new UserCompany;
        // $UserCompany->IDUser = $User->IDUser;
        // $UserCompany->IDBusinessType = $request->IDBusinessType;
        // $UserCompany->CompanyName = $request->CompanyName;
        // $UserCompany->CompanyAddress = $request->CompanyAddress;
        // $UserCompany->WebsiteUrl = $request->WebsiteUrl;
        // $UserCompany->save();

        $ImageExtArray = ["jpeg", "jpg", "png", "svg"];


        // if ($request->has('CompanyLogo')) {
        //     if (!in_array($request->CompanyLogo->extension(), $ImageExtArray)) {
        //         return redirect()->back()->withErrors('Wrong Img Ext. (jpeg,jpg,svg,png)');
        //     }

        //     $CompanyLogo =  $request->file('CompanyLogo');
        //     $name  = $UserCompany->IDUserCompany . '.' . $CompanyLogo->getClientOriginalExtension();
        //     // $path  = 'trainer';
        //     Storage::delete('trainer/' . $name);
        //     $path = 'dashboard/images/trainer';
        //     $CompanyLogo = $this->storeMedia($CompanyLogo, $path, $UserCompany->IDUserCompany);
        //     $UserCompany->CompanyLogo = $name;
        //     $UserCompany->save();
        // }

        // if ($request->IDPeriodPackage && $request->currencySelect) {

        //     $UserPackage = new UserPackage;
        //     $UserPackage->IDUser = $User->IDUser;
        //     $UserPackage->IDPeriodPackage = $request->IDPeriodPackage;
        //     $UserPackage->save();
        // } elseif (!is_null($request->IDPeriodPackage) && !is_null($request->UserEgyptionKids) && !is_null($request->UserStrangeKids)) {

        //     $UserPackage = new UserPackage;
        //     $UserPackage->IDUser = $User->IDUser;
        //     $UserPackage->IDPeriodPackage = $request->IDPeriodPackage;
        //     $UserPackage->UserEgyptionKids = $request->UserEgyptionKids;
        //     $UserPackage->UserStrangeKids = $request->UserStrangeKids;
        //     $UserPackage->save();
        // }
        $contact = [
            'subject' => trans('alert.Subject'),
        ];
        $contact2 = [
            'subject' => 'New Registeration Password Info',
            'fullname' =>  $request->FirstName . ' ' . $request->MiddleName . ' ' . $request->LastName,
            'phone' => $request->UserPhone,
            'email' => $request->UserEmail,
            'message' => 'Password For ' . $request->FirstName . 'is ' . $request->UserPassword

        ];

        // Mail::to($request->UserEmail)->send(new ContactFormMail($contact, 'register'));
        // Mail::to('dr.refaee@yahoo.com')->send(new ContactFormMail($contact2, 'new_register_password'));

        return redirect()->route('site.login.system')->with('success', trans('website.SignUpSucessMsg'));
    }

    public function LoginSystem(Request $request)
    {
        return view('site.auth.login');
    }
}
