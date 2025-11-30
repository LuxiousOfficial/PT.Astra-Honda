<x-layout-user>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                   @forelse ($profiles as $profile)
                   <h2 class="fw-bold my-2 text-center">Data Profile</h2>
                   <div class="table-responsive col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12 small shadow-3">
                       <table class="table table-sm text-center">
                       <thead>
                           <tr class="table table-danger fw-bold text-center">
                               <th scope="col">Email</th>
                               <th scope="col">Name</th>
                               <th scope="col">Nik</th>
                             </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td style="color: black"> <span style="font-weight: bold">
                               {{ $profile->name }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold"> 
                               {{ $profile->email }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold"> 
                               {{ $profile->nik }}
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
                               {{ $profile->gender }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold"> 
                               {{ $profile->place_of_birth }}
                           </td>
                           <td style="color: black"><span style="font-weight: bold">
                               {{ $profile->date_of_birth }}
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
                               {{ $profile->address }}
                           </td>
                           <td style="color: black"><span style="font-weight: bold">
                               {{ $profile->phone_number }}
                           </td>
                           <td style="color: black"><span style="font-weight: bold"> 
                               {{ $profile->religion }}
                           </td>
                       </tr>
                       <thead>
                           <tr class="table table-danger fw-bold text-center">
                               <th scope="col">Status</th>
                             </tr>
                       </thead>
                       <tr>
                           <td style="color: black"><span style="font-weight: bold">
                               {{ $profile->status }}    
                           </td>
                       </tr>
                       </tbody>
                       </table>
                   </div>
                   @empty
                       <h2 class="text-center fs-4">You Don't Have Profile Data</h2>
                   @endforelse
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                   @forelse ($educations as $education)
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
                               {{ $education->university }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold"> 
                               {{ $education->faculty }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold">
                               {{ $education->institution }}
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
                               {{ $education->major }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold"> 
                               {{ $education->entry_year }}
                           </td>
                           <td style="color: black"><span style="font-weight: bold">
                               {{ $education->graduate }}
                           </td>
                       </tr>
                       <thead>
                           <tr class="table table-danger fw-bold text-center">
                               <th scope="col">IPK</th>
                             </tr>
                       </thead>
                       <tr>
                           <td style="color: black"><span style="font-weight: bold">IPK 
                               {{ $education->ipk }}
                           </td>
                       </tr>
                       </tbody>
                       </table>
                   </div>
                   @empty
                   <h2 class="text-center fs-4">You Don't Have Education Data</h2>
                   @endforelse
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                  @forelse ($experiences as $experience)
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
                              {{ $experience->company }}
                          </td>
                          <td style="color: black"> <span style="font-weight: bold"> 
                              {{ $experience->position }}
                          </td>
                          <td style="color: black"> <span style="font-weight: bold">
                              {{ $experience->entry_year }}
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
                              {{ $experience->year_stopped }}
                          </td>
                          <td style="color: black"> <span style="font-weight: bold"> 
                              {{ $experience->salary }}
                          </td>
                          <td style="color: black"><span style="font-weight: bold">
                              {{ $experience->industry }}
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
                              {{ $experience->facility }}
                          </td>
                          <td style="color: black"><span style="font-weight: bold">
                              {{ $experience->reason_to_stop }}
                          </td>
                      </tr>
                      </tbody>
                      </table>
                  </div>
                  @empty
                  <h2 class="text-center fs-4">You Don't Have Experience Data</h2>
                  @endforelse
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                   @forelse ($skills as $skill)
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
                               {{ $skill->first_skill }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold"> 
                               {{ $skill->first_rate }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold">
                               {{ $skill->second_skill }}
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
                               {{ $skill->second_rate }}
                           </td>
                           <td style="color: black"> <span style="font-weight: bold"> 
                               {{ $skill->third_skill }}
                           </td>
                           <td style="color: black"><span style="font-weight: bold">
                               {{ $skill->third_rate }}
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
                               {{ $skill->fourth_skill }}
                           </td>
                           <td style="color: black"><span style="font-weight: bold">
                               {{ $skill->fourth_rate }}
                           </td>
                           <td style="color: black"><span style="font-weight: bold">
                               {{ $skill->fifth_skill }}
                           </td>
                       </tr>
                       <thead>
                           <tr class="table table-danger fw-bold text-center">
                               <th scope="col">Fifth Rate Skill</th>
                           </tr>
                       </thead>
                       <tr>
                           <td style="color: black"><span style="font-weight: bold"> 
                               {{ $skill->fifth_rate }}
                           </td>
                       </tr>
                       </tbody>
                       </table>
                   </div>
                   @empty
                   <h2 class="text-center fs-4">You Don't Have Skill Data</h2> 
                   @endforelse
                </div>

                <div class="col-md-12 col-12 bg-white rounded-3 py-4 px-4 mt-3">
                   @forelse ($positions as $position)
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
                                       {{ $position->office }}
                                   </td>
                                   <td style="color: black"> <span style="font-weight: bold"> 
                                       {{ $position->salary }}
                                   </td>
                                   <td style="color: black"> <span style="font-weight: bold">
                                       {{ $position->join }}
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                   @empty
                   <h2 class="text-center fs-4">You Don't Have Position Data</h2>
                   @endforelse
                </div>
            </div>
        </div>
    </section>
</x-layout-user>