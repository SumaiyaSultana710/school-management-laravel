@extends('layout.ParentMain')

@section('parentcontent')

@section('title')
Dashboard
@endsection

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
						<tr>
							<td></td>
							<td><b>Date & Time:  </b>noticedate<br><br>
								<b>Subject:  </b>subjectname<br><br>
								 description

							</td>
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
						<tr>
							<td>title</td>
							<td>starting</td>
							<td>ending</td>
						</tr>
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