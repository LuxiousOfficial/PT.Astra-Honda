<x-layoutdashboardahm>
    <section class="form-pendaftaran rounded-3 mt-3">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                  <h2 class="fw-bold my-2 text-center">Data User</h2>
                  <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                      <table class="table table-sm text-center">
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                              <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Developer</th>
                              </tr>
                        </thead>
                      <tbody>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->name }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->email }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->is_developer }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Admin</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->is_admin }}
                            </td>
                        </tr>
                      </tbody>
                      </table>
                  </div>
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                  <h2 class="fw-bold my-2 text-center">Data Profile</h2>
                  <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                      <table class="table table-sm text-center">
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                                <th scope="col">Nik</th>
                              </tr>
                        </thead>
                      <tbody>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->profile->name }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->profile->email }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->profile->nik }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Gender</th>
                                <th scope="col">Place Of Birth</th>
                                <th scope="col">Date Of Birth</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->profile->gender }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->profile->place_of_birth }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->profile->date_of_birth }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Address</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Religion</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->profile->address }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->profile->phone_number }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold"> 
                                {{ $user->profile->religion }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Status</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->profile->status }}    
                            </td>
                        </tr>
                      </tbody>
                      </table>
                  </div>
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                  <h2 class="fw-bold text-center my-2">Data Education</h2>
                  <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                      <table class="table table-sm text-center">
                          <thead>
                              <tr class="table table-danger fw-bold text-center">
                                  <th scope="col">University</th>
                                  <th scope="col">Faculty</th>
                                  <th scope="col">Institution</th>
                                </tr>
                          </thead>
                      <tbody>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->education->university }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->education->faculty }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->education->institution }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Major</th>
                                <th scope="col">Entry Year</th>
                                <th scope="col">Graduate</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->education->major }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->education->entry_year }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->education->graduate }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">IPK</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"><span style="font-weight: bold">IPK 
                                {{ $user->education->ipk }}
                            </td>
                        </tr>
                      </tbody>
                      </table>
                  </div>
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                  <h2 class="fw-bold text-center my-2">Data Experience</h2>
                  <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                      <table class="table table-sm text-center">
                          <thead>
                              <tr class="table table-danger fw-bold text-center">
                                  <th scope="col">Company</th>
                                  <th scope="col">Position</th>
                                  <th scope="col">Entry Year</th>
                                </tr>
                          </thead>
                      <tbody>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->experience->company }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->experience->position }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->experience->entry_year }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Year Stopped</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Industry</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->experience->year_stopped }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->experience->salary }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->experience->industry }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Facility</th>
                                <th scope="col">Reason To Stop</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"><span style="font-weight: bold"> 
                                {{ $user->experience->facility }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->experience->reason_to_stop }}
                            </td>
                        </tr>
                      </tbody>
                      </table>
                  </div>
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                  <h2 class="fw-bold text-center my-2">Data Skill</h2>
                  <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                      <table class="table table-sm text-center">
                          <thead>
                              <tr class="table table-danger fw-bold text-center">
                                  <th scope="col">First Skill</th>
                                  <th scope="col">First Rate Skill</th>
                                  <th scope="col">Second Skill</th>
                                </tr>
                          </thead>
                      <tbody>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->skill->first_skill }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->skill->first_rate }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold">
                                {{ $user->skill->second_skill }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Second Rate Skill</th>
                                <th scope="col">Third Skill</th>
                                <th scope="col">Third Rate Skill</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->skill->second_rate }}
                            </td>
                            <td style="color: black"> <span style="font-weight: bold"> 
                                {{ $user->skill->third_skill }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->skill->third_rate }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Fourth Skill</th>
                                <th scope="col">Fourth Rate Skill</th>
                                <th scope="col">Fifth Skill</th>
                              </tr>
                        </thead>
                        <tr>
                            <td style="color: black"><span style="font-weight: bold"> 
                                {{ $user->skill->fourth_skill }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->skill->fourth_rate }}
                            </td>
                            <td style="color: black"><span style="font-weight: bold">
                                {{ $user->skill->fifth_skill }}
                            </td>
                        </tr>
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Fifth Rate Skill</th>
                            </tr>
                        </thead>
                        <tr>
                            <td style="color: black"><span style="font-weight: bold"> 
                                {{ $user->skill->fifth_rate }}
                            </td>
                        </tr>
                      </tbody>
                      </table>
                  </div>
               </div>

               <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                <h2 class="fw-bold text-center my-2">Data Position</h2>
                <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                    <table class="table table-sm text-center">
                        <thead>
                            <tr class="table table-danger fw-bold text-center">
                                <th scope="col">Position</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Join</th>
                              </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: black"> <span style="font-weight: bold">
                                    {{ $user->position->karir->jabatan }}
                                </td>
                                <td style="color: black"> <span style="font-weight: bold"> 
                                    {{ $user->position->salary }}
                                </td>
                                <td style="color: black"> <span style="font-weight: bold">
                                    {{ $user->position->join }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
               </div>

               <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3 mb-3">
                <h2 class="fw-bold my-2 text-center">Data File</h2>
                <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                    <table class="table table-sm text-center">
                      <thead>
                          <tr class="table table-danger fw-bold text-center">
                            <th scope="col">Pasphoto</th>
                            <th scope="col">CV</th>
                              <th scope="col">KTp</th>
                            </tr>
                      </thead>
                    <tbody>
                      <tr>
                          <td style="color: black"> <span style="font-weight: bold">
                              {{ $user->file->pasphoto }}
                          </td>
                          <td style="color: black"> <span style="font-weight: bold"> 
                              {{ $user->file->cv }}
                          </td>
                          <td style="color: black"> <span style="font-weight: bold"> 
                              {{ $user->file->ktp }}
                          </td>
                      </tr>
                      <thead>
                          <tr class="table table-danger fw-bold text-center">
                              <th scope="col">KK</th>
                              <th scope="col">Ijazah</th>
                              <th scope="col">Transkrip Nilai</th>
                            </tr>
                      </thead>
                      <tr>
                          <td style="color: black"> <span style="font-weight: bold">
                              {{ $user->file->kk }}
                          </td>
                          <td style="color: black"> <span style="font-weight: bold"> 
                              {{ $user->file->ijazah }}
                          </td>
                          <td style="color: black"><span style="font-weight: bold">
                              {{ $user->file->transkrip_nilai }}
                          </td>
                      </tr>
                      <thead>
                          <tr class="table table-danger fw-bold text-center">
                              <th scope="col">SKCK</th>
                            </tr>
                      </thead>
                      <tr>
                          <td style="color: black"><span style="font-weight: bold">
                              {{ $user->file->skck }}
                          </td>
                      </tr>
                    </tbody>
                    </table>
                </div>
              </div>

              <a href="/dashboardhrdastrahonda/user" class="fs-5 fw-bold text-decoration-none p-2 mb-3 bg-danger text-white rounded">Back</a>
              
            </div>
        </div>
    </section>
</x-layoutdashboardahm>