import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioModernFive } from './portfolio-modern-five';

describe('PortfolioModernFive', () => {
  let component: PortfolioModernFive;
  let fixture: ComponentFixture<PortfolioModernFive>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioModernFive]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioModernFive);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
