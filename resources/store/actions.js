import Axios from "axios"

let actions = {
    fetchPosts({commit}){
        Axios.get('/api/posts')
        .then(res => {
            commit('FETCH_POSTS', res.data)
        }).catch(err => {
            console.log(err)
        })
    }
}
export default actions