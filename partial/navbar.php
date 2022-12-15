<!-- Nav Bottom -->
<div class="nav-bottom">
    <a class="nav-link" href="/dashboard.php">
        <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if(isset($_GET['layout'])) { if ($_GET['layout'] == 'aktif') { echo 'teal'; } } else { echo 'teal'; } ?>" width="32px" viewBox="0 0 32 32">
            <path d="M26.64,13.2A11,11,0,0,0,5,15.08,6,6,0,0,0,6,27H25a7,7,0,0,0,1.64-13.8ZM25,25H6a4,4,0,0,1,0-8,1,1,0,0,0,1-1,9,9,0,0,1,17.83-1.75,1,1,0,0,0,.85.8A5,5,0,0,1,25,25Z" />
            <rect x="15" y="17" width="2" height="2" />
            <rect x="19" y="17" width="2" height="2" />
            <rect x="11" y="17" width="2" height="2" />
            </g>
        </svg>
        <p class="fc-black">Aktif</p>
    </a>
    <a class="nav-link" href="/dashboard.php?layout=pengguna">
        <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if(isset($_GET['layout'])) { if ($_GET['layout'] == 'pengguna') { echo 'teal'; } } ?>" width="32px" viewBox="0 0 32 32">
            <path d="M2,29c0-.78,1.92-1.7,3.24-2l.11,0,8-3A1,1,0,0,0,14,23V20.31a1,1,0,0,0-.57-.9A6,6,0,0,1,10,14a1,1,0,0,0-1-1V11a1,1,0,0,0,1-1V8A6,6,0,0,1,22,8v2a1,1,0,0,0,1,1v2h2V11a2,2,0,0,0-1-1.73V8A8,8,0,0,0,8,8V9.27A2,2,0,0,0,7,11v2a2,2,0,0,0,1,1.75,8.07,8.07,0,0,0,4,6.16v1.39L4.7,25c-.91.23-4.7,1.37-4.7,4v2a1,1,0,0,0,1,1H15V30H2Z" />
            <path d="M24,16a8,8,0,1,0,8,8A8,8,0,0,0,24,16Zm0,14a6,6,0,1,1,6-6A6,6,0,0,1,24,30Z" />
            <rect x="23" y="20" width="2" height="4" />
            <rect x="23" y="26" width="2" height="2" />
            </g>
        </svg>
        <p>Pengguna</p>
    </a>
    <a class="nav-link" href="/dashboard.php?layout=generate">
        <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if(isset($_GET['layout'])) { if ($_GET['layout'] == 'generate') { echo 'teal'; } } ?>" width="32px" viewBox="0 0 32 32">
            <path d="M28.71,6.29l-6-6A1,1,0,0,0,22,0H6A3,3,0,0,0,3,3V29a3,3,0,0,0,3,3H26a3,3,0,0,0,3-3V7A1,1,0,0,0,28.71,6.29ZM27,29a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V3A1,1,0,0,1,6,2H21V6a2,2,0,0,0,2,2h4Z" />
            <rect x="7" y="20" width="18" height="2" />
            <rect x="7" y="25" width="18" height="2" />
            <path d="M7,12v4a1,1,0,0,0,1,1H24a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H8A1,1,0,0,0,7,12Zm2,1H23v2H9Z" />
            </g>
        </svg>
        <p>Generate</p>
    </a>
    <a class="nav-link" href="/dashboard.php?layout=clean">
        <svg xmlns="http://www.w3.org/2000/svg" fill="<?php if(isset($_GET['layout'])) { if ($_GET['layout'] == 'profile') { echo 'teal'; } } ?>" width="32px" viewBox="0 0 32 32">
            <path d="M30.08,11H30V9a2,2,0,0,0-2-2H27V5a2,2,0,0,0-2-2H16V2a1,1,0,0,0-1-1H1A1,1,0,0,0,0,2V29a2,2,0,0,0,2,2H31a1,1,0,0,0,1-1V13.13A2,2,0,0,0,30.08,11ZM16,5h9V7H16ZM6,12V29H2V3H14V7H5V9H28v2H7A1,1,0,0,0,6,12ZM30,29H8V13H30a.72.72,0,0,1,0,.13Z" />
            </g>
        </svg>
        <p>Clean</p>
    </a>
</div>