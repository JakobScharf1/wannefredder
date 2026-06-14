import { Metadata } from 'next';
import 'bootstrap/dist/css/bootstrap.min.css'

import './assets/scss/style.scss'
import '@mdi/font/css/materialdesignicons.min.css';


export const metadata: Metadata = {
  title: "Coral - Next Ts Multipurpose Landing Template",
  description: "Coral - Next Ts Multipurpose Landing Template",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
       <head>
        <meta name="description" content="Bootstrap 5 Landing Template" />
        <meta name="keywords" content="Onepage, creative, modern, bootstrap 5, multipurpose, clean, responsive, business, corporate" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.0.0" />
        <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
          crossOrigin="anonymous">
        </script>
      </head>
      <body className={``}>
        {children}
      </body>
    </html>
  );
}
