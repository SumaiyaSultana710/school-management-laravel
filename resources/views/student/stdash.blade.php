@extends('layout.StudentMain')

@section('studentcontent')

@section('title')
Dashboard
@endsection
<div class="row ">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body"style="overflow: auto;">
				<h4 class="page-title">Today's Class</h4>
				<table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
					  <thead>
						<tr style="background-color: #313a46; color: #ababab;">
							<th width ="16%">Day/Time</th>
							<th width ="21%">9AM-10AM</th>
							<th width ="21%">10AM-11AM</th>
							<th width ="21%">11AM-12AM</th>
							<th width ="21%">1PM-2PM</th>
						</tr>
					  </thead>
					<tbody>
				     	<tr>
							<td>Sundayday</td>
							<td><b>Subject: </b>Bangla<br>
								<b>Teacher: </b>Md. Abdur Rahim</td>
							<td><b>Subject: </b>English<br>
								<b>Teacher: </b>Md. Rafiq
							<td><b>Subject: </b>Math<br>
								<b>Teacher: </b>Mr Rahman</td>
							<td><b>Subject: </b>Science<br>
								<b>Teacher: </b>Md. Ashfak</td>
						</tr>
							
					</tbody>
				    </table>
			</div> 
		</div> 
	</div>
</div>
<div class="row">
    <div class="col-12 event_calendar_content">
        <div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
              <div class="items">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
                  <thead>
                    <tr style="background-color: #313a46; color: #ababab;">
                      <th></th>
                      <th>Notices</th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i=0; $i != count($notice); $i++)
						<tr>
							<td>{{$i+1}}</td>
							<td><b>Date & Time:  </b>{{$notice[$i]->noticedate}}<br><br>
								<b>Subject:  </b>{{$notice[$i]->subjectname}}<br><br>
								 {{$notice[$i]->description}}

							</td>
				    @endfor
                  </tbody>
                </table>
              </div>      
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="items">
					<table id="basic-datatable" class="table table-striped dt-responsive nowrap" width="100%">
					  <thead>
						<tr style="background-color: #313a46; color: #ababab;">
							<th>Event Title</th>
							<th>From</th>
							<th>To</th>
						</tr>
					  </thead>
					  <tbody>
						@for($i=0; $i != count($event); $i++)
						<tr>
							<td>{{$event[$i]->title}}</td>
							<td>{{$event[$i]->starting}}</td>
							<td>{{$event[$i]->ending}}</td>
						</tr>
				        @endfor
					</tbody>
				    </table>
			    </div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection