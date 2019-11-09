@extends('layouts.admin-dashboard')

@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Add a course</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('course.store')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 px-2 ">
                                                <div class="input-group-prepend">
                                               <span class="input-group-text" id="basic-addon1">Title:</span>
                                                <input type="text" class="form-control" name="title" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                             <label>Price</label><br>
                                              <div class="input-group-prepend">
                                                <span class="input-group-text">&#8358;</span>
                                                <input type="number"  name="price" class="form-control" aria-label="Amount">
                                              <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                              </div>
                                            </div>
                                        </div>
                                            <div class="col-md-4 pl-1">
                                                <label>Duration</label><br>
                                                <div class=" input-group">
                                                <input type="number" name="duration" class="form-control">
                                              <div class="input-group-append">
                                                <span class="input-group-text">MONTHS</span>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                               <label>Role </label><br>
                                                <select name="course" class="form-control" aria-describedby="basic-addon1">
                                                     <option >Select</option>
                                                        @foreach($users as $user)
                                                        @if($user->role != 0)
                                                        <option  class="form-control" value="{{$user->id}}">
                                                        {{$user->username}}</option>
                                                         @endif
                                                         @endforeach
                                                     </select>
                                                 </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Course Description</label>
                                                <textarea class="form-control" required name="description" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary btn-round">CREATE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
            