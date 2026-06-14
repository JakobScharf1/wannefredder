import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioModernTwo } from './portfolio-modern-two';

describe('PortfolioModernTwo', () => {
  let component: PortfolioModernTwo;
  let fixture: ComponentFixture<PortfolioModernTwo>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioModernTwo]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioModernTwo);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
