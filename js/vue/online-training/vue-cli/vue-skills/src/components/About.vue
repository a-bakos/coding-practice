<template>
	<div class="about">
		<h1>Hello, {{ their_name }}</h1>
		Lorem ipsum
	</div>
</template>

<script>
	export default {
	  name: 'Skills',
	  data() {
	    return {
	      their_name: this.$route.params.name
	    }
	  }
	}
</script>
