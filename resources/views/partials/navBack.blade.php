<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">TheGrillMaster</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
          
        <a href="{{route('navbars.index')}}">
            <i class='bx bxs-navigation'></i>
          <span class="links_name">NavBar</span>
        </a>
         <span class="tooltip">NavBar</span>
      </li>
      <li>
        <a href="{{route('home')}}">
            <i class='bx bx-home' ></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="{{route('warmWelcomes.index')}}">
        <i class='bx bx-question-mark' ></i>
         <span class="links_name">Warm Welcome</span>
       </a>
       <span class="tooltip">Warm Welcome</span>
     </li>
     <li>
       <a href="{{route('loveSteaks.index')}}">
        <i class='bx bx-info-circle' ></i>
         <span class="links_name">LoveSteaks</span>
       </a>
       <span class="tooltip">LoveSteaks</span>
     </li>
     <li>
       <a href="{{route('happyCustomers.index')}}">
        <i class='bx bx-happy-alt' ></i>
         <span class="links_name">Happy Customers</span>
       </a>
       <span class="tooltip">Happy Customers</span>
     </li>
     <li>
       <a href="{{route('bookTables.index')}}">
        <i class='bx bx-table' ></i>
         <span class="links_name">Book Tables</span>
       </a>
       <span class="tooltip">Book Tables</span>
     </li>
     <li>
       <a href="{{route('portfolios.index')}}">
        <i class='bx bx-food-menu' ></i>
         <span class="links_name">Our Chefs</span>
       </a>
       <span class="tooltip">Our Chefs</span>
     </li>
     <li>
       <a href="{{route('footers.index')}}">
        <i class='bx bx-intersect' ></i>
         <span class="links_name">Footer</span>
       </a>
       <span class="tooltip">Footer</span>
     </li>
     <li>
       <a href="{{route('titles.index')}}">
        <i class='bx bx-text' ></i>
         <span class="links_name">Title</span>
       </a>
       <span class="tooltip">Title</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>