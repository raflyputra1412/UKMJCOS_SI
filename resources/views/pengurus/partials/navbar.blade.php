<div class="h-screen sticky top-0 p-3 space-y-2 w-64 bg-gray-900 text-gray-100 font-normal">
    <div class="flex items-center p-2 space-x-4">
        <img src="https://source.unsplash.com/100x100/?nature" alt="" class="w-12 h-12 rounded-full bg-gray-500">
        <div>
            <h2 class="text-lg font-semibold"> {{ auth()->user()->nama_lengkap }} </h2>
            <span class="flex items-center space-x-1">
                <a rel="noopener noreferrer" href="#" class="text-xs hover:underline text-gray-400">View profile</a>
            </span>
        </div>
    </div>
    <div class="divide-y divide-gray-800">
        <ul class="pt-2 pb-4 space-y-1 text-sm">
            <li class="{{ ($active === 'dashboard') ? 'bg-gray-700' : '' }}">
                <a rel="noopener noreferrer" href="/dashboard_pengurus" class="flex items-center p-2 space-x-3 rounded-md">
                    {{-- dashboard icon --}}
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" width="24px" fill="#ffffff">
                
                    <path d="M0,512h232.7V279.3H0V512z M0,232.7h232.7V0H0V232.7z M279.3,512H512V279.3H279.3V512z M279.3,0v232.7H512V0H279.3z"/>
                </svg>
                   <span>Dashboard</span>
                </a>
            </li>
            
            <li class="{{ ($active === 'jadwal_kegiatan') ? 'bg-gray-700' : '' }}">
                <a rel="noopener noreferrer" href="/jadwal_kegiatan" class="flex items-center p-2 space-x-3 rounded-md">
                    {{-- jadwal kegiatan --}}
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve" width="24px" fill="#ffffff">
                        <g>
                            <path d="M315,0H15C6.716,0,0,6.716,0,15v300c0,8.284,6.716,15,15,15h300c8.284,0,15-6.716,15-15V15C330,6.716,323.284,0,315,0z
                                    M300,300H30V30h270V300z"/>
                            <path d="M90.001,109.999h150c8.284,0,15-6.716,15-15s-6.716-15-15-15h-150c-8.284,0-15,6.716-15,15S81.717,109.999,90.001,109.999z
                                "/>
                            <path d="M90.001,179.999h150c8.284,0,15-6.716,15-15c0-8.284-6.716-15-15-15h-150c-8.284,0-15,6.716-15,15
                                C75.001,173.283,81.717,179.999,90.001,179.999z"/>
                            <path d="M90.001,249.999h150c8.284,0,15-6.716,15-15c0-8.284-6.716-15-15-15h-150c-8.284,0-15,6.716-15,15
                                C75.001,243.283,81.717,249.999,90.001,249.999z"/>
                        </g>
                 </svg>                            
                    <span>Jadwal Kegiatan</span>
                </a>
            </li>

            <li class="{{ ($active === 'data_anggota') ? 'bg-gray-700' : '' }}">
                <a rel="noopener noreferrer" href="/data_anggota" class="flex items-center p-2 space-x-3 rounded-md">
                    {{-- Data anggota icon --}}
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve" width="24px" fill="#ffffff">
                        <g>
                            <g>
                                <path d="M417.4,71.6C371.2,25.4,309.8,0,244.5,0S117.8,25.4,71.6,71.6S0,179.2,0,244.5s25.4,126.7,71.6,172.9S179.2,489,244.5,489
                                    s126.7-25.4,172.9-71.6S489,309.8,489,244.5S463.6,117.8,417.4,71.6z M244.5,462C124.6,462,27,364.4,27,244.5S124.6,27,244.5,27
                                    S462,124.6,462,244.5S364.4,462,244.5,462z"/>
                                <path d="M244.5,203.2c35.1,0,63.6-28.6,63.6-63.6s-28.5-63.7-63.6-63.7s-63.6,28.6-63.6,63.6S209.4,203.2,244.5,203.2z
                                    M244.5,102.9c20.2,0,36.6,16.4,36.6,36.6s-16.4,36.6-36.6,36.6s-36.6-16.4-36.6-36.6S224.3,102.9,244.5,102.9z"/>
                                <path d="M340.9,280.5c-22.3-32.8-54.7-49.5-96.4-49.5s-74.1,16.6-96.4,49.5c-16.6,24.4-27.2,57.7-31.4,98.7
                                    c-0.8,7.4,4.6,14.1,12,14.8c7.4,0.8,14.1-4.6,14.8-12c8.5-82.3,42.5-124,101-124s92.5,41.7,101,124c0.7,6.9,6.6,12.1,13.4,12.1
                                    c0.5,0,0.9,0,1.4-0.1c7.4-0.8,12.8-7.4,12-14.8C368.1,338.1,357.5,304.9,340.9,280.5z"/>
                            </g>
                        </g>
                    </svg>
                    <span>Data Anggota</span>
                </a>
            </li>

            <li class="{{ ($active === 'events') ? 'bg-gray-700' : '' }}">
                <a rel="noopener noreferrer" href="/events" class="flex items-center p-2 space-x-3 rounded-md">
                    <svg height="24px" viewBox="0 0 36 36" version="1.1"  preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" fill="#ffffff">
                        <title>event-line</title>
                        <path class="clr-i-outline clr-i-outline-path-1" d="M16.17,25.86,10.81,20.5a1,1,0,0,1,1.41-1.41L16.17,23l8.64-8.64a1,1,0,0,1,1.41,1.41Z"></path><path class="clr-i-outline clr-i-outline-path-2" d="M32.25,6H29V8h3V30H4V8H7V6H3.75A1.78,1.78,0,0,0,2,7.81V30.19A1.78,1.78,0,0,0,3.75,32h28.5A1.78,1.78,0,0,0,34,30.19V7.81A1.78,1.78,0,0,0,32.25,6Z"></path><path class="clr-i-outline clr-i-outline-path-3" d="M10,10a1,1,0,0,0,1-1V3A1,1,0,0,0,9,3V9A1,1,0,0,0,10,10Z"></path><path class="clr-i-outline clr-i-outline-path-4" d="M26,10a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V9A1,1,0,0,0,26,10Z"></path><rect class="clr-i-outline clr-i-outline-path-5" x="13" y="6" width="10" height="2"></rect>
                        <rect x="0" y="0" fill-opacity="0"/>
                    </svg>
                    <span>Event</span>
                </a>
            </li>
            <li class="{{ ($active === 'inventaris') ? 'bg-gray-700' : '' }}">
                <a rel="noopener noreferrer" href="/inventaris" class="flex items-center p-2 space-x-3 rounded-md">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 201.607 201.607" style="enable-background:new 0 0 201.607 201.607;" xml:space="preserve" width="24px" fill="#ffffff">
                    <g>
                        <g>
                            <path d="M59.584,4.305L0,51.099v146.203h146.189v-0.351l55.311-49.184V4.491l0.107-0.186H59.584z
                                M61.535,9.806h57.068L73.252,51.099H10.529L61.535,9.806z M140.695,191.805H5.504V56.61h135.191V191.805z M142.374,51.099H81.43
                                l45.355-41.293h60.669L142.374,51.099z M195.999,145.291l-49.807,44.285V55.064l49.807-45.623V145.291z"/>
                            <rect x="49.553" y="75.882"/>
                        </g>
                    </g>
                </svg>
                    <span>Inventaris</span>
                </a>
            </li>

            <li class="{{ ($active === 'absensi') ? 'bg-gray-700' : '' }}">
                <a rel="noopener noreferrer" href="/absensi" class="flex items-center p-2 space-x-3 rounded-md">
                    {{--absensi icon  --}}
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="24px" fill="#ffffff">
                    <g>
                        <g>
                            <g>
                                <rect x="132.083" y="55.882" width="15.694" height="312.191"/>
                                <path d="M427.949,0h-288.02c-30.81,0-55.877,25.067-55.877,55.877v400.246c0,30.811,25.066,55.877,55.877,55.877h288.02v-87.897
                                    h-15.694v72.202H139.928c-22.156,0-40.183-18.025-40.183-40.183s18.026-40.183,40.183-40.183h288.02V0z M412.254,400.246H147.776
                                    v-16.167h-15.694v16.732c-12.611,1.781-23.887,7.773-32.336,16.522V55.877c0-19.471,13.923-35.747,32.336-39.407v23.397h15.694
                                    V15.694h264.479V400.246z"/>
                                <path d="M139.928,439.956v-15.694c-17.569,0-31.862,14.293-31.862,31.862c0,17.568,14.293,31.862,31.862,31.862V472.29
                                    c-8.915,0-16.167-7.253-16.167-16.167S131.014,439.956,139.928,439.956z"/>
                                <rect x="148.092" y="424.102" width="15.694" height="64.043"/>
                                <rect x="171.947" y="424.259" width="232.14" height="15.694"/>
                                <rect x="171.947" y="448.272" width="232.14" height="15.694"/>
                                <rect x="171.947" y="472.294" width="232.14" height="15.694"/>
                                <rect x="235.99" y="360.227" width="88.056" height="15.694"/>
                                <path d="M371.913,40.025H188.116v143.774h183.797V40.025z M356.219,168.104H203.811V55.719h152.409V168.104z"/>
                                <rect x="219.982" y="72.044" width="120.072" height="15.694"/>
                                <rect x="219.982" y="104.064" width="88.056" height="15.694"/>
                                <rect x="219.982" y="136.08" width="72.044" height="15.694"/>
                            </g>
                        </g>
                    </g>
                </svg>
                    <span>Absensi & Pertemuan</span>
                </a>
            </li>
        </ul>
        <ul class="pt-4 pb-2 space-y-1 text-sm">
            <li class="{{ ($active === 'content') ? 'bg-gray-700' : '' }}">
                <a rel="noopener noreferrer" href="/content" class="flex items-center p-2 space-x-3 rounded-md">
                    {{-- content icon --}}
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.2 490.2" style="enable-background:new 0 0 490.2 490.2;" xml:space="preserve" width="20px" fill="#ffffff">
                        <g>
                            <g>
                                <path d="M418.5,418.5c95.6-95.6,95.6-251.2,0-346.8s-251.2-95.6-346.8,0s-95.6,251.2,0,346.8S322.9,514.1,418.5,418.5z M89,89
                                    c86.1-86.1,226.1-86.1,312.2,0s86.1,226.1,0,312.2s-226.1,86.1-312.2,0S3,175.1,89,89z"/>
                                <path d="M245.1,336.9c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7v-67.3h67.3c3.4,0,6.4-1.4,8.7-3.6c2.2-2.2,3.6-5.3,3.6-8.7
                                    c0-6.8-5.5-12.3-12.2-12.2h-67.3v-67.3c0-6.8-5.5-12.3-12.2-12.2c-6.8,0-12.3,5.5-12.2,12.2v67.3h-67.3c-6.8,0-12.3,5.5-12.2,12.2
                                    c0,6.8,5.5,12.3,12.2,12.2h67.3v67.3C232.8,331.4,238.3,336.9,245.1,336.9z"/>
                            </g>
                        </g>
                </svg>
                    <span>Buat Content</span>
                </a>
            </li>
            <li>
                <a rel="noopener noreferrer" href="{{ Route('logout') }}" class="flex items-center p-2 space-x-3 rounded-md">
                    {{-- logout icon --}}
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current text-gray-50">
                        <path d="M440,424V88H352V13.005L88,58.522V424H16v32h86.9L352,490.358V120h56V456h88V424ZM320,453.642,120,426.056V85.478L320,51Z"></path>
                        <rect width="32" height="64" x="256" y="232"></rect>
                    </svg>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>