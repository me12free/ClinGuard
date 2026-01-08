# ClinGuard

A web application to prevent Protected Health Information (PHI) in AI service prompts using RAG and OpenAI.

## Project Overview

ClinGuard is a secure web application designed to help healthcare professionals safely utilize AI for clinical documentation while ensuring compliance with data protection regulations such as HIPAA and Kenya's Data Protection Act 2019. The system detects and redacts PHI before it reaches external AI services.

## Features

- Real-time PHI detection and redaction
- Integration with OpenAI's API
- Retrieval-Augmented Generation (RAG) for clinical knowledge
- Secure user authentication and role-based access control
- Comprehensive audit logging
- Responsive web interface

## Tech Stack

- **Frontend**: React 18.x, TypeScript, TailwindCSS
- **Backend**: Laravel 10.x, PHP 8.2+
- **PHI Detection**: Python 3.10+, Transformers, spaCy
**Database**: MySQL 8.x
- **Vector Database**: ChromaDB
- **AI Integration**: OpenAI API (GPT-4)
- **Containerization**: Docker, Docker Compose
- **CI/CD**: GitHub Actions

## Getting Started

### Prerequisites

- Docker and Docker Compose
- Node.js 18+ and npm 9+
- Python 3.10+
- PHP 8.2+
- Composer

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/clinguard.git
   cd clinguard
   ```

2. Copy the example environment file:
   ```bash
   cp .env.example .env
   ```

3. Start the development environment:
   ```bash
   docker-compose up -d
   ```

4. Install PHP dependencies:
   ```bash
   docker-compose exec app composer install
   docker-compose exec app php artisan key:generate
   docker-compose exec app php artisan migrate
   ```

5. Install frontend dependencies:
   ```bash
   npm install
   npm run dev
   ```

## Project Structure

```
├── app/                  # Laravel application (root)
├── detection_engine/     # Python PHI detection service
├── docs/                 # Documentation
│   ├── architecture/     # Architecture diagrams and decisions
│   ├── api/              # API documentation
│   └── deployment/       # Deployment guides
└── .github/workflows/    # GitHub Actions workflows
```

## Development

See [DEVELOPMENT.md](DEVELOPMENT.md) for detailed development setup and guidelines.

## Security

See [SECURITY.md](SECURITY.md) for security best practices and reporting guidelines.

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Strathmore University
- OpenAI
- Laravel Community
- React Community
