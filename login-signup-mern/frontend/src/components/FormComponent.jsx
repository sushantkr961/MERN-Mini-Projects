import { FaFacebookF, FaLinkedinIn } from "react-icons/fa";
import { FcGoogle } from "react-icons/fc";
import { Link } from "react-router-dom";

function FormComponent({
  user,
  handleSignUpClick,
  handleSignInClick,
  isSignUpActive,
  handleRegister,
  handleInputRegis,
}) {
  return (
    <div className={`container ${isSignUpActive ? "right-panel-active" : ""}`}>
      <div className="form-container sign-up-container">
        <form method="POST" onSubmit={handleRegister}>
          <h1>Create Account</h1>
          <div className="social-container">
            <Link className="social">
              <FaFacebookF fontSize={"large"} color="#3b5998" />
            </Link>
            <Link className="social">
              <FcGoogle fontSize={"large"} />
            </Link>
            <Link className="social">
              <FaLinkedinIn fontSize={"large"} color="#0A66C2" />
            </Link>
          </div>
          <span>or use your email for registration</span>
          <input
            type="text"
            placeholder="Name"
            autoComplete="off"
            name="name"
            value={user.name}
            onChange={handleInputRegis}
          />
          <input
            type="email"
            placeholder="Email"
            name="email"
            value={user.email}
            onChange={handleInputRegis}
          />
          <input
            type="password"
            placeholder="Password"
            name="password"
            value={user.password}
            onChange={handleInputRegis}
          />
          <button type="submit">Sign Up</button>
        </form>
      </div>
      <div className="form-container sign-in-container">
        <form action="#">
          <h1>Sign in</h1>
          <div className="social-container">
            <Link className="social">
              <FaFacebookF fontSize={"large"} color="#3b5998" />
            </Link>
            <Link className="social">
              <FcGoogle fontSize={"large"} />
            </Link>
            <Link className="social">
              <FaLinkedinIn fontSize={"large"} color="#0A66C2" />
            </Link>
          </div>
          <span>or use your account</span>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <Link to={"/forgot-password"}>Forgot your password?</Link>
          <button>Sign In</button>
        </form>
      </div>
      <div className="overlay-container">
        <div className="overlay">
          <div className="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button className="ghost" onClick={handleSignInClick}>
              Sign In
            </button>
          </div>
          <div className="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button className="ghost" onClick={handleSignUpClick}>
              Sign Up
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default FormComponent;
