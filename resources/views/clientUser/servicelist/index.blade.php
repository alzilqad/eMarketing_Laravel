@include('clientUser.header')

<main id="main">
    <section>
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12">
                <div class="row justify-content-center">
                    <div class="col col-lg-8 mt-4">
                        <h4>Service History:</h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col col-xl-8 mt-4">
                        <table id="serviceTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Service</th>
                                    <th>Type</th>
                                    <th>Cost</th>
                                    <th>Company</th>
                                    <th>Address</th>
                                    <th>Contact No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <% services.forEach( function(std){ %>
                                <tr>
                                    <td><%= std.service_history_id %></td>
                                    <td><%= std.description %></td>
                                    <td>
                                        <%=
                                            std.start_date.getDate()+"/"+(std.start_date.getMonth()+1)+"/"+std.start_date.getFullYear();%>
                                    </td>
                                    <td>
                                        <%=
                                            std.end_date.getDate()+"/"+(std.end_date.getMonth()+1)+"/"+std.end_date.getFullYear();
                                            %>
                                    </td>
                                    <td><%= std.name %></td>
                                    <td><%= std.type %></td>
                                    <td><%= std.cost %></td>
                                    <td><%= std.company_name %></td>
                                    <td><%= std.company_address %></td>
                                    <td><%= std.contact_number %></td>
                                </tr>
                                <% }) %>
                            </tbody>
                        </table>
                        <div class="text-center" id="printBtnID">
                            <button class="btn w-50 btn-success" onclick="printFile('printBtnID','proposalTable')">
                                Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('clientUser.footer')