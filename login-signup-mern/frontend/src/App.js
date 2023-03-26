import { Route, Routes } from "react-router-dom";
import ForgotPassword from "./pages/ForgotPassword";
import Form from "./pages/Form";

function App() {
  return (
    <Routes>
      <Route path="/" element={`Home`} />
      <Route path="/signin" element={<Form />} />
      <Route path="/forgot-password" element={<ForgotPassword />} />
    </Routes>
  );
}

export default App;
