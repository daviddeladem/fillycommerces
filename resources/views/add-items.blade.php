@extends('app')

@section('content')
    <section class="section-main bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="d-flex">
                        <i class="fa fa-arrow-left"></i>
                        <h6 class="mb-0 mx-2">Add description</h6>
                    </div>
                    <hr />
                    <div class="card my-3">
                        <div class="card-body p-4">
                            <div class="">

                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                        Title
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEnterYourName"
                                            placeholder="Item name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Subtitle</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPhoneNo2"
                                            placeholder="Item name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmailAddress2"
                                            placeholder="Search category">
                                        <p class="mt-2">+ Add category</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Serial number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputChoosePassword2"
                                            placeholder="Serial number">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Condition</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">New</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">Used</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                                id="flexRadioDisabled">
                                            <label class="form-check-label" for="flexRadioDisabled">Need repairs</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Brand</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Item brand">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Model</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Item model">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Size</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Item size">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Color</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Item color">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Other
                                        specifics</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Add specifics">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9" id="editor">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck4">
                                            <label class="form-check-label" for="gridCheck4">Check me out</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-info px-5">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card my-3">
                        <div class="card-body p-4">
                            <div class="">

                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                        Type
                                    </label>
                                    <div class="col-sm-9">
                                        <select class="form-select mb-3" aria-label="Default select example">
                                            <option selected>Fixed Price</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Price</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPhoneNo2"
                                            placeholder="Enter price">
                                        <div class="my-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">Allow
                                                    offers</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">Offer
                                                    discount</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Shipping Fee</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmailAddress2"
                                            placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Quantity</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="inputChoosePassword2"
                                            placeholder="1">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Returns</label>
                                    <div class="col-sm-9">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">Domestic</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">International</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Return
                                        window</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Enter window">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Model</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Item model">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Size</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Item size">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Color</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Item color">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Other
                                        specifics</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputConfirmPassword2"
                                            placeholder="Add specifics">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9" id="editor">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck4">
                                            <label class="form-check-label" for="gridCheck4">Check me out</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-info px-5">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
