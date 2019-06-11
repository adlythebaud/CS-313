'use strict';

const e = React.createElement;
var test = "test";

class AuthUI extends React.Component {
  constructor(props) {
    super(props);
    this.state = { 
      login: true,
      signup: false,
      passwordReset: false,
      email_username: '',
      password: '',
      confirm_password: '' 
    };
  }


  
  handleFormSubmit = (e, message) => {
    e.preventDefault();
    
    
    axios({
      method: 'post',
      url: './server-scripts/authenticate.php',
      headers: { 'content-type': 'application/json' },
      data: this.state
    })
    .then((response) => {
      
      console.log(response.data);
      // check if the user does not exist. 
      // If they don't then go to next page. 
      // Don't create the user just yet.
      if (this.state.signup) {
        console.log("sending user to sign up");
        if (response.data == 1) {
          alert("An account by this name already exists. Please sign in.");
        } 
        if (response.data == 0) {
          window.location = "/assignments/project_1/src/pages/create_new_user.php";
        }
      }
      if (this.state.login) {
        console.log("logging in");
        if (response.data == 1) {
          console.log("login successful");
          window.location = "./pages/home.php";
        }
        if (response.data == 0) {
          alert("Incorrect Username or Password. Please try again.");
        }
      }
      if (this.state.passwordReset) {
        console.log("resetting password");
      }
    });
    
    

  }

  render() {

    const formSubmitButton = (
      <button onClick={e => this.handleFormSubmit(e, "test")} className="form-control btn btn-primary">SIGN IN</button>
    );
    
    const logginButton = <button onClick={() => this.setState({ login: true, signup: false, passwordReset: false })} className="btn btn-link">Already Have An Account?</button>;

    const signupButton = <button onClick={() => this.setState({ login: false, signup: true, passwordReset: false })} className="btn btn-link">New User? Click Here.</button>;

    const passwordResetButton = <button onClick={() => this.setState({ login: false, signup: false, passwordReset: true })} className="btn btn-link">Forgot Your Password?</button>;

    const login = (
      <div className="container col-md-3">
        <br></br>
        <h5 className="row justify-content-center">Welcome Back!</h5>
        <form method="post" action="#">
          <div className="form-group">
            <label htmlFor="username">Username or Email Address</label><br></br>
            <input type="text" name="username" id="username_input" className="form-control"
              value={this.state.email_username} onChange={e=> this.setState({ email_username: e.target.value})}></input>
          </div>
          <div>
            <label htmlFor="password">Password</label><br></br>
            <input type="password" id="password_input" className="form-control" value={this.state.password}
              onChange={e=> this.setState({password: e.target.value})}></input>
          </div>
          <br></br>
          {formSubmitButton}
        </form>
        <div className="row justify-content-center">
          {signupButton}
        </div>
        <div className="row justify-content-center">
          {passwordResetButton}
        </div>
      </div>
    );
    
    const signup = (
      <div className="container col-md-3">
        <br></br>
        <h5 className="row justify-content-center">Nice To Meet You!</h5>
        <form method="post" action="#">
          <div className="form-group">
            <label htmlFor="username">Enter A Valid Email, Then Let's Get Started!</label><br></br>
            <input type="text" name="username" id="username_input" className="form-control"
              value={this.state.email_username} onChange={e=> this.setState({ email_username: e.target.value})}></input>
          </div>          
          <br></br>
          {formSubmitButton}
        </form>
        <div className="row justify-content-center">
          {logginButton}
        </div>
        <div className="row justify-content-center">
          {passwordResetButton}
        </div>
      </div>
    );

    const passwordReset = (
      <div className="container col-md-3">
        <br></br>
        <h5 className="row justify-content-center">It's Been A While, Huh?</h5>
        <form method="post" action="#">
          <div className="form-group">
            <label htmlFor="username">Username or Email Address</label><br></br>
            <input type="text" name="username" id="username_input" className="form-control"
              value={this.state.email_username} onChange={e=> this.setState({ email_username: e.target.value})}></input>
          </div>          
          <br></br>
          {formSubmitButton}
        </form>
        <div className="row justify-content-center">
          {signupButton}
        </div>
        <div className="row justify-content-center">
          {logginButton}
        </div>
      </div>
    );

    


    if (this.state.login) {
      return (
        <div className="row justify-content-center">
          {login}
        </div>
        
      );
    }

    if (this.state.signup) {
      return (
        <div className="row justify-content-center">
          {signup}
        </div>
        
      );
    }

    if (this.state.passwordReset) {
      return (
        <div className="row justify-content-center">
          {passwordReset}
        </div>
        
      );
    }

    return (
        <div>
          Error with application.
        </div>
      );
  }
}

const domContainer = document.querySelector('#form-root');
ReactDOM.render(e(AuthUI), domContainer);