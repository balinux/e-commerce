<template>

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Store Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <router-link to="/list">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home
                </a>
              </li>
            </router-link>

            <router-link to="/add">
              <li class="nav-item active">
                <a class="nav-link" href="#">Add
                </a>
              </li>
            </router-link>

            <li class="nav-item active">
              <a class="nav-link" href="#">Home2
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <router-link to="/admin/home"> 
              <li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
              </li>
            </router-link>
            
          </ul>
        </div>
      </div>
    </nav>

</template>

<script>

</script>

<style>

</style>