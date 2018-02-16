import Vue from './app.js';
import { router } from './app.js';

export default {
    user: {
        authenticated: false,
        profile: null
    },
    check() {
        if (localStorage.getItem('jwt_token') !== null) {
            window.Vue.http.get('user')
                .then(res => {
                    if (res.status >= 200 && res.status < 300) {
                        this.profile = res.body.user
                        this.authenticated = true
                    } else {
                        router.push('login')
                    }
                }, err => {
                    router.push('login')
                })
        } else {
            this.profile = null
            this.authenticated = false
            router.push('login')
        }
    },
    signin(context, email, password) {
        window.Vue.http.post('auth',{ email, password }).then(res => {
            context.error = false
            const token = res.data.token
            localStorage.setItem('jwt_token', token)
            window.Vue.http.headers.common['Authorization'] = 'Bearer ' + token

            this.user.authenticated = true

            router.push('dashboard')
        }, res => {
            context.error = true
        })
    },
    signout() {
        localStorage.removeItem('jwt_token')
        this.user.authenticated = false
        this.user.profile = null

        router.push('home')
    }
}