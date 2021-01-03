@include('clientUser.header')

<main id="main">
    <section>
        <div class="row mt-4 justify-content-center">
            <div class="col col-xl-8 border rounded border-primary">
                <div class="border-bottom text-center">
                    <label class="mt-4" for="">
                        <h2><b>{{$company->company_name}}</b></h2>
                    </label><br />
                    <label class="mt-2" for="">Phone: {{$company->contact_number}}</label><br />
                </div>
            </div>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="row row-xl-12 justify-content-center">
                <div class="col col-4">
                    <button class="active btn btn-primary btn-block">
                        <a href="/client/company/<%=company.id%>"><span class="text-light">Details</span></a></button><br />
                </div>
                <div class="col col-4">
                    <button class="btn btn-secondary btn-block">
                        <a href="/client/company/<%=company.id%>/services"><span class="text-light">Services</span></a></button><br />
                </div>
                <div class="col col-4">
                    <button class="btn btn-dark btn-block">
                        <a href="/client/company/<%=company.id%>/chat"><span class="text-light">Chat</span></a></button><br />
                </div>
                <div class="col col-4">
                    <button class="btn btn-info btn-block">
                        <a href="/client/company/<%=company.id%>/appointments"><span class="text-light">Appoitments</span></a></button><br />
                </div>
                <div class="col col-4">
                    <button class="btn btn-warning btn-block">
                        <a href="/client/company/<%=company.id%>/notes"><span class="text-light">Notes</span></a></button><br />
                </div>
                <div class="col col-4">
                    <button class="btn btn-danger btn-block">
                        <a href="/client/company/<%=company.id%>/proposals"><span class="text-light">Proposals</span></a></button><br />
                </div>
            </div>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="col col-xl-9">
                <section id="profile-section">
                    <div class="row m-0 p-0">
                        <div class="col-12 bg-primary mb-3 pt-3">
                            <h5 class="text-light">Company Details</h5>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Name :</td>
                                        <td>{{$company->company_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone :</td>
                                        <td>{{$company->contact_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address :</td>
                                        <td>
                                            {{$company->company_address}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Formation :</td>
                                        <td>{{$company->type}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="profile-section">
                    <div class="row m-0 p-0">
                        <div class="col-12 bg-primary mb-3 pt-3">
                            <h5 class="text-light">Manager Details</h5>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Name :</td>
                                        <td>{{$company->full_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone :</td>
                                        <td>{{$company->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email :</td>
                                        <td>{{$company->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address :</td>
                                        <td>{{$company->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>City :</td>
                                        <td>{{$company->city}} </td>
                                    </tr>
                                    <tr>
                                        <td>Country :</td>
                                        <td>{{$company->country}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>

@include('clientUser.footer')