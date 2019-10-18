@extends('layouts.resultlay')
@section('content')

     <section class="main-field">
      <div class="find">
            <h3>Result</h3>
        </div>
        <div class="result1">
      
        	@if($courses)
				@foreach($courses as $course)
					<div class="result1">
						<p class="first-result">
							{{$course->name}} &nbsp; &nbsp; &nbsp; <i>Beginner</i> <span>.</span> <em>2
                        Days</em>
						</p>
						 <p class="second-result">
                    <a href="#" class="online-link">ONLINE</a>
                    <a href="#" class="free-link">FREE</a>
                </p>
					</div>
				@endforeach
        	@endif

        </div>
        	
				

        


    </section>

    <!-- Footer -->
    


    <!-- End of Footer -->
    @endsection

