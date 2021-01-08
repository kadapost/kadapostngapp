@extends('layouts.dashboard')
@section('content')
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Job</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ route('home') }}">Dashboard</a></li>
							<li>Add Job</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			
            <form action="/jobs" method="POST" enctyp="multipart/form-data">
            @csrf
			<!-- Table-->
			<div class="col-lg-12 col-md-12">

				<div class="dashboard-list-box margin-top-0">
					<h4>Job Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Email -->
						<div class="form">
							<h5>Your Email</h5>
							<input name="user_email" class="search-field" type="text" placeholder="mail@example.com" value="{{auth::user()->email}}" required/>
						</div>

						<!-- Title -->
						<div class="form">
							<h5>Job Title</h5>
							<input name="title" class="search-field" type="text" placeholder="" value="" required/>
						</div>

						<!-- Job Type -->
						<div class="form">
							<h5>Job Type</h5>
							<select name="type" data-placeholder="Full-Time" class="chosen-select-no-single">
								<option value="full-time">Full-Time</option>
								<option value="part-time">Part-Time</option>
								<option value="internship">Internship</option>
								<option value="freelance">Freelance</option>
							</select>
						</div>


						<!-- Choose Category -->
						<div class="form">
							<div class="select">
								<h5>Category</h5>
								<select name="category" data-placeholder="Choose Categories" class="chosen-select" multiple>
									<option value="1">Web Developers</option>
									<option value="2">Mobile Developers</option>
									<option value="3">Designers & Creatives</option>
									<option value="4">Writers</option>
									<option value="5">Virtual Assistants</option>
									<option value="6">Customer Service Agents</option>
									<option value="sales and marketing">Sales & Marketing Experts</option>
									<option value="8">Accountants & Consultants</option>
								</select>
							</div>
						</div>


						<!-- Location -->
						<div class="form">
							<h5>Location <span>(optional)</span></h5>
							<input name="location" class="search-field" type="text" placeholder="e.g. Abuja" value=""/>
							<p class="note">Leave this blank if the location is not important</p>
						</div>


						<!-- Tags -->
						<div class="form">
							<h5>Job Tags <span>(optional)</span></h5>
							<input name="tags" class="search-field" type="text" placeholder="e.g. PHP, Social Media, Management" value=""/>
							<p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
						</div>


						<!-- Description -->
						<div class="form" style="width: 100%;">
							<h5>Description</h5>
							<textarea class="WYSIWYG" name="description" cols="40" rows="3" id="description" spellcheck="true" required></textarea>
						</div>

						<!-- Application email/url -->
						<div class="form">
							<h5>Application email / URL</h5>
							<input name="application" type="text" placeholder="Enter an email address or website URL">
						</div>

						<!-- TClosing Date -->
						<div class="form">
							<h5>Closing Date <span>(optional)</span></h5>
							<input name="closing_date" data-role="date" type="text" placeholder="yyyy-mm-dd">
							<p class="note">Deadline for new applicants.</p>
						</div>

					</div>

					</div>
				</div>


				<div class="dashboard-list-box margin-top-30">
					<h4>Company Details</h4>
					<div class="dashboard-list-box-content">

					<div class="submit-page">

						<!-- Company Name -->
						<div class="form">
							<h5>Company Name</h5>
							<input name="company_name" type="text" placeholder="Enter the name of the company">
						</div>

						<!-- Website -->
						<div class="form">
							<h5>Website <span>(optional)</span></h5>
							<input name="company_website" type="text" placeholder="http://">
						</div>

						<!-- Teagline -->
						<div class="form">
							<h5>Tagline <span>(optional)</span></h5>
							<input name="company_tagline" type="text" placeholder="Briefly describe your company">
						</div>

						<!-- Video -->
						<div class="form">
							<h5>Video <span>(optional)</span></h5>
							<input name="company_video" type="text" placeholder="A link to a video about your company">
						</div>

						<!-- Twitter -->
						<div class="form">
							<h5>Twitter Username <span>(optional)</span></h5>
							<input name="twitter_username" type="text" placeholder="@yourcompany">
						</div>

						<!-- Logo -->
						<div class="form">
							<h5>Logo <span>(optional)</span></h5>
							<label class="upload-btn">
							    <input name="logo" type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>
						</div>


					</div>

					</div>
				</div>
				<!-- <a href="#" class="button margin-top-30">Preview <i class="fa fa-arrow-circle-right"></i></a> -->
                <button type="submit" class="button margin-top-30">Submit <i class="fa fa-arrow-circle-right"></i></button>
			</div>
            </form>

			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">© 2019 WorkScout. All Rights Reserved.</div>
			</div>
		</div>
@endsection