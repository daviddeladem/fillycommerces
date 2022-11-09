@extends('app')
<style>
    .apply {
        background: #003A83;
        color: white;
    }
</style>
@section('content')
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name b-radius padding-y-sm">
        <div class="container" style="max-width: 50%; margin:auto;">
            <h3 class="my-4">All Openings</h3>
            <div class="d-flex justify-content-between" style="margin-bottom: 5%;">
                <div class="d-flex flex-column">
                    <h5>Community Sales Manager</h5>
                    <p>California, USA</p>
                </div>
                <button class="btn btn-primary btn-block px-5">
                    Apply Now
                </button>
            </div>
            <h5 class="my-4">About Filly Commerce</h5>
            <p>At Filly Commerce, we're committed to providing you with the best shopping experience possible. We believe in
                creating a simple, stress-free shopping experience that lets you shop with peace of mind. At Filly Commerce,
                we are focused on providing you with a simple, stress-free shopping experience. We believe that quality
                customer service and product satisfaction should be the foundation of any successful business. We believe
                that shopping should be hassle-free and fun. Our priority is to make sure your every purchase from us goes
                as smoothly as possible and you get the most positive experience possible.</p>
            <h5 class="my-4">Objectives of the Job</h5>
            <p>Community Managers usually work in our company’s marketing or public relations department building strategies
                to increase brand awareness. They organize, implement and manage engaging marketing campaigns on numerous
                outlets, like emails, videos, blog articles and social media platforms.
                Community Managers will also collaborate with the sales and development teams to learn more about the
                product they’re selling and to better understand the needs and goals of consumers. They’ll use this
                information to create targeted campaigns and build relationships with customers. After publishing campaigns,
                Community Managers will monitor the results and adjust their marketing efforts accordingly.</p>
            <h5 class="my-4">Key Responsibilities</h5>
            <ul>
                <li class="my-2">Develop a content marketing plan and editorial calendar.</li>
                <li class="my-2">Create engaging and shareable content for a blog, Facebook page, monthly newsletters
                    and/or promotional
                    videos.</li>
                <li class="my-2">Provide community feedback to the management and stakeholders.</li>
                <li class="my-2">Plan and execute community initiatives and programs.</li>
                <li class="my-2">Monitor social media campaigns and analyze web traffic from the online community using
                    key performance
                    indicators (KPIs).</li>
            </ul>
            <h5 class="my-4">Benefits and Compensation</h5>
            <ul>
                <li class="my-2">Customer service-related bonuses and incentives</li>
                <li class="my-2">Generous benefits and salary steps to underpin your career growth</li>
                <li class="my-2">A truly diverse and inclusive workforce</li>
                <li class="my-2">Dynamic working environments, with committed teams to build great relationships with
                    customers</li>
                <li class="my-2">Work/Life balance - standard business hours (Monday to Friday)</li>
            </ul>

            <div class="form p-5" style="background-color: #D9D9D9; margin-top:10%">
                <h5>Apply for this job</h5>
                <hr>
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Linkedin Profile</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Website url</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Resume</label>
                        <div class="col-sm-9">
                            <p>Attach, Dropbox, Google Drive or enter manually</p>
                            <p>(File types; pdf, doc, docx, txt)</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Cover Letter</label>
                        <div class="col-sm-9">
                            <p>Attach, Dropbox, Google Drive or enter manually</p>
                            <p>(File types; pdf, doc, docx, txt)</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Degree</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="inlineFormSelectPref">
                                <option selected>Select Degree</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Discipline</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="inlineFormSelectPref">
                                <option selected>Select Discipline</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">Filly Commerce has my consent to collect,
                            store, and process my data for the
                            purpose of considering me for employment, and for up to 730 days thereafter</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection
