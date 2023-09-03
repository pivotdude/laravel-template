import React from 'react'
import Layout from "../../components/core/Layout";

interface IUser {
  name: string
}

interface WelcomeProps {
  user: IUser
}

export default function Welcome({ user }: WelcomeProps) {
  return (
    <Layout>
      <h1>Welcome</h1>
      <p>Hello {user.name}, welcome to your first Inertia app!</p>
    </Layout>
  )
}
// Welcome.layout = page => <Layout children={page} title="Welcome" />
