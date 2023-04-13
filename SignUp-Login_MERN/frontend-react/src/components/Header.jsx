import { Link } from "react-router-dom";

const Header = () => {
  return (
    <header className="flex w-full items-center bg-white">
      <div className="container mx-auto">
        <div className="relative -mx-4 flex items-center justify-between">
          <div className="w-60 max-w-full px-4">
            <Link to="/" className="block w-full py-5">
              <img src="/logo.svg" alt="logo" className="w-full" />
            </Link>
          </div>
          <div className="justify-end pr-16 flex lg:pr-0">
            <Link to="/login">
              <button className="text-dark hover:text-primary py-3 px-7 text-base font-medium">
                Login
              </button>
            </Link>
            <Link to="/">
              <button className="bg-primary rounded-lg py-3 px-7 text-base font-medium text-white hover:bg-opacity-90 bg-blue-900">
                Sign Up
              </button>
            </Link>
          </div>
        </div>
      </div>
    </header>
  );
};

export default Header;
