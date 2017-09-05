<template>
	<div>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Carousel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         <div class="select">
			  <select v-model="changedLocales">
			    <option v-for="locale in locales" :value="locale">{{locale}}</option>
			  </select>
			</div>
      </div>
    </nav>
		         

		  <!-- Hero content: will be in the middle -->
		  <div class="hero-body">
		    <div class="container has-text-centered">
		      <h1 class="title">
		        Title
		      </h1>
		      <h2 class="subtitle">
		        Subtitle
		      </h2>
		    </div>
		  </div>

		  <!-- Hero footer: will stick at the bottom -->
		  <div class="hero-foot">
		    <nav class="tabs">
		      <div class="container">
		        <ul>
		          <li class="is-active"><a>Overview</a></li>
		          <li><a>Modifiers</a></li>
		          <li><a>Grid</a></li>
		          <li><a>Elements</a></li>
		          <li><a>Components</a></li>
		          <li><a>Layout</a></li>
		        </ul>
		      </div>
		    </nav>
		  </div>
		</section>

		<router-view></router-view>

		
		<footer class="footer">
		  <div class="container">
		    <div class="content has-text-centered">
		      <p>
		        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
		        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
		        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
		      </p>
		      <p>
		        <a class="icon" href="https://github.com/jgthms/bulma">
		          <i class="fa fa-github"></i>
		        </a>
		      </p>
		    </div>
		  </div>
		</footer>


	</div>

		
</template>

<script type="text/javascript">
	import Locale from './helpers/locale'
	import {get} from './helpers/api'
	export default {
		data(){
			return {
				locales: [ 'en', 'hk', 'cn' ],
				changedLocales: 'en',
			}
		},
		watch: {
			'changedLocales': 'updateLocale'
		},
		methods: {
			updateLocale(){
				Locale.setLocale(this.changedLocales)
				get()
			}
		}
	}
</script>