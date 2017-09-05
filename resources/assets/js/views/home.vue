<template>
<div>
<body>

  <button @click="fetchData">hi</button>
  <section class="section">
    <div class="container">
      <h1 class="title">Section</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
      </h2>
    </div>
  </section>

</body>

</div>

</template>

<script type="text/javascript">
	import {get} from '../helpers/api'

	export default {
		data(){
			return {
				posts: [],
				trans: [],
                        items: []
			}
		},
		created(){
                this.fetchData()
		},
            methods: {
                        fetchData(){
                                get(`/api/posts`)
                                .then((res) =>{
                                  this.posts = res.data.posts
                                })
                        }
            }
	}
</script>