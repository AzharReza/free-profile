@extends('admin.admin-layout')
@section('title','Users Approve')
@section('page-css')@endsection
@section('content')

    <div class="content-wrapper">
        <section class="section about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <img src="{{asset($data->pic)}}" alt="" class="img-fluid" style="height: 500px;">
                    </div>
                    <!-- <div class="col-lg-3 mt-lg-4 col-md-6">
                        <img src="/images/about/img-7.jpg" alt="" class="img-fluid">
                    </div> -->
                    <div class="col-lg-8 col-md-12">
                        <div class="about-item position-relative mt-5 mt-lg-0">
                            <span class="h5 text-lg text-muted">{{$data->first_name.' '.$data->last_name}}</span>
                            <!-- <h2 class="mt-1 mb-3">Having <span class="text-color">10 years</span> of experience in fitness</h2> -->

                            <!-- <p class="mb-4">Meet Amelia - she’s an inspired mother, community member, and gardener, with a real passion for coaching others to achieve their relationship goals and personal goals! Her previous background in Science, Education and Sustainability shows she’s the type who is able to see issues through a grounded, realistic lens, and then provide actionable advice that actually works, while she guides you compassionately along the way, step by step! Well-traveled and open-minded, she is familiar with a variety of therapeutic tools and skills that have helped her reach her own goals, and which she actively uses in coaching. Her range of specialties is diverse: addiction, anxiety, communication techniques, experiences with discrimination, healing from toxic or abusive dynamics, sustainable mental habits, effective parenting, trauma recognition/healing from trauma, true grief, and even mid-life crises. Amelia wants you to know she sees you and is and at the ready to coach you through almost anything—she’ll be your best teammate and cheerleader in one! Above all, she wants to give you the keys to interconnectedness with the ones you love the most</p> -->
                            <!-- <a href="index.html" class="btn btn-primary">Book</a> -->
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="">Book</button> -->
                            <!-- <a href="service.html" class="btn btn-main">Services<i class="ti-angle-right ml-2"></i></a> -->
                            <table class="table table-striped">
                                <!-- <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead> -->
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>First Name</td>
                                    <td>{{$data->first_name}}</td>
                                    <td>Last Name</td>
                                    <td>{{$data->last_name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Email Address</td>
                                    <td>{{$data->email}}</td>
                                    <td>Phone No</td>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Father Name</td>
                                    <td>{{$data->father_name}}</td>
                                    <td>CNIC No.</td>
                                    <td>{{$data->cnic}}</td>

                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Address</td>
                                    <td>{{$data->address}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Address2</td>
                                    <td>{{$data->address2}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>City</td>
                                    <td>{{$data->city}}</td>
                                    <td>State</td>
                                    <td>{{$data->state}}</td>

                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Date Of Birth</td>
                                    <td>{{$data->dob}}</td>
                                    <td>Religion</td>
                                    <td>{{$data->religion}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Gender</td>
                                    <td>{{$data->gender}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Description</td>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr><a class="btn btn-primary float-right" href="{{route('userApproved',$data)}}">Approve</a> </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- content-wrapper ends -->

@endsection
@section('page-js')
@endsection
