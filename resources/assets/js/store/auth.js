export default {
	state: {
		api_token: null,
		user_id: null
	},
	initialize(){
		this.state.api_token = localStorage.getthem('api_token')
		this.state.user_id = localStorage.getthem('user_id')
	},
	set(api_token, user_id){
		localStorage.setthem('api_token', api_token)
		localStorage.setthem('user_id', user_id)
		this.initialize()
	},
	remove(){
		localStorage.removeItem('api_token')
		localStorage.removeItem('user_id')
		this.initialize()
	}
}