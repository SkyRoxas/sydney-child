import gravatar from 'gravatar'
import axios from 'axios'

const getMail = (function() {
  return window.location.hash.match(/#mail:(.+)/g) ? window.location.hash.match(/#mail:(.+)/)[1] : 'a0983086152@gmail.com'
})()

class MyGravatar {

  constructor(mail) {
    this.mail = mail
  }

  getAvatarSrc(opt) {
    return gravatar.url(this.mail, {
      protocol: 'https'
    })
  }

  getPerfile(opt) {
    return axios(gravatar.profile_url(this.mail, {
        protocol: 'https'
      }))
      .then(res => {
        return res.data
      })
  }

}

const renderDOM = () => {

  const myGravatar = new MyGravatar(getMail)

  const perfile = {
    name: {
      icon: '',
      value: '黃致維'
    }
  }

  console.log(myGravatar.getAvatarSrc())
  console.log(myGravatar.getPerfile())

}

export default renderDOM
